@include('frontend.Layouts.headers')
<section class="meetings-page" id="meetings">
    <div class="container">

        <div class="row">
            @foreach ($contents as $content)
                <div class="col-lg-4 mb-3">
                    <div style="height: 400px" class="card">
                        <img src="{{ $content->image_url }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $content->title }}</h5>
                            <div class="d-flex h-100 pb-4 flex-column justify-content-between">
                                <p class="card-text mb-2">{!! $content->shortDesc !!}</p>
                                <div>
                                    <a href="#" class="btn btn-primary">Read More ...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12">
                <div class="pagination">
                    @include('frontend.share.paginate', [
                        'paginator' => $contents,
                        $contents->links(),
                        'link_limit' => 4,
                    ])
                    {{-- <ul>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul> --}}
                </div>
            </div>
</section>
@include('frontend.Layouts.footer')
