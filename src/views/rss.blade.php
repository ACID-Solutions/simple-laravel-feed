{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<rss version="2.0">
    <channel>
        <title>{!! $channel->title !!}</title>
        <link>{{$channel->link}}</link>
        <description><![CDATA[{!! $channel->description !!}]]></description>
        @if (!empty($channel->logo))
            <image>
                <url>{{$channel->logo}}</url>
                <title>{!! $channel->title !!}</title>
                <link>{{$channel->link}}</link>
            </image>
        @endif
        <language>{{$channel->lang}}</language>
        <lastBuildDate>{{$channel->pubdate}}</lastBuildDate>

        @if(count($items))
            @foreach($items as $item)
                <item>
                    <title>{!! $item->title !!}</title>
                    <link>{{$item->link}}</link>
                    <guid>{{$item->link}}</guid>
                    <description>{!!  $item->description !!}</description>
                    @if(!empty($item->author))
                        <author>{{$item->author['email']}} ({!! $item->author['name'] !!})</author>
                    @endif
                    @if(!empty($item->enclosure))
                        <enclosure url="{{$item->enclosure['url']}}" length="{{$item->enclosure['length']}}"
                                   type="{{$item->enclosure['type']}}" />
                    @endif
                </item>
            @endforeach
        @endif
    </channel>
</rss>