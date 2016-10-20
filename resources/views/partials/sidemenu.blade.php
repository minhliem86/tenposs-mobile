<div id="side">
    <div class="h_side">
        <div class="imageleft clearfix">
            @if( Session::has('user') )
            <div class="image">
                <a href="{{ route('profile') }}">
                    @if(Session::get('user')->profile->avatar_url)
                    <img class="img-circle" src="{{ Session::get('user')->profile->avatar_url }}" alt=""/>
                    @else
                    <img class="img-circle" src="{{ url('/img/tkNdnb1.jpg') }}" alt=""/>
                    @endif
                </a>
            </div>
            <p class="font32">{{ Session::get('user')->profile->name }}</p>
            @else
            <div class="image">
                <a href="{{ route('login') }}">
                <img class="img-circle" src="{{ url('/img/tkNdnb1.jpg') }}" alt=""/>
                </a>
            </div>
            <p class="font32"><a href="{{ route('login') }}">ログイン</a></p>
            @endif
            
        </div>
    </div>
  
    <ul class="s_nav" style="
            background: #{{ $app_info->data->app_setting->menu_background_color}}
        ">
        @foreach ( $app_info->data->side_menu as $menu )
        <li class="{{ $menu->icon }}">
            <a class="active" href="{{ \App\Utils\Menus::page($menu->id) }}" style="
                font-size: {{ $app_info->data->app_setting->menu_font_size }};
                font-family: {{ $app_info->data->app_setting->menu_font_family }};
                color: #{{ $app_info->data->app_setting->menu_font_color }};
            ">
            {{ $menu->name }}
        </a></li>            
        @endforeach
        @if( Session::has('user') )
        <li class="ti-unlock">
            <a class="active" href="{{ route('logout') }}" style="
                font-size: {{ $app_info->data->app_setting->menu_font_size }};
                font-family: {{ $app_info->data->app_setting->menu_font_family }};
                color: #{{ $app_info->data->app_setting->menu_font_color }};
            ">
            ログアウト
        </a></li> 
        @endif
    </ul>
</div><!-- End side -->