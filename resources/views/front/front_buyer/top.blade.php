<span class="font-20 color-black">My MegaBuy</span><span class="color-blue font-14 ml-10 hidden">longlyov_90(0)</span>
<ul class="nav nav-tabs">
    <li  class=" @if($top_menu == 'activity') active @endif ">
        <a href="{{url("front/my/activity_index")}}" >Activty</a>
    </li>
    <li class=" @if($top_menu == 'messages') active @endif ">
        <a href="{{url("front/my/messages")}}"  >Messages
            @if (isset($new_message))
                ({{$new_message}})
            @endif
        </a>
    </li>
    <li  class=" @if($top_menu == 'account') active @endif ">
        <a href="{{url("front/my/account")}}" >Account</a>
    </li>
    <span class="font-10 pull-right mt-20"> is your MegaBuy Homepage</span>
    <span class="mt-20 pull-right bold font-10">Summary&nbsp</span>
</ul>