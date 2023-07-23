
<footer class="footer" >
    <div class="container">
        <div class="row">

            <div class="col-lg-4 footer_col">
                <div class="footer_column footer_contact">
                    <div class="logo_container">
                        <div class="logo"><a href="">OneTech</a></div>
                    </div>

                    <div class="footer_phone">{{ $setting['phn']}}</div>
                    <div class="footer_contact_text">
                        <p>{{ $setting['email']}}</p>
                        <p>{{ $setting['description']}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 offset-lg-2">
                <div class="footer_column">
                    <div class="footer_title">Find it Fast</div>
                    <ul class="footer_list">
                        @foreach($categories as $category )
                        <li><a href="{{url('/productbycat/'.$category->name)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer_column">
                    <div class="footer_title">Information</div>
                    <ul class="footer_list">
                        @foreach(App\Models\Page::all() as $page)
                        <li><a href={{url('/pages',['pageSlug'=>$page->slug])}}>{{$page->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
