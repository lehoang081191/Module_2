@extends('home.master')
@section('title','Home')
@section('anh')
<div class="container" style="background-image: url('/admin_layout/images/img6.png'); height: 505px" data-stellar-background-ratio="0.5">
</div>
@section('qc')
<!-- Chạy quảng cáo 2 bên -->
    <div id="divQCRight" style="display: none; position: absolute; top: 0px">
        <a href="https://github.com/lehoang081191"><img src="/admin_layout/images/img4.png" width="145" /></a>
        </div>
        <div id="divQCLeft" style="display: none; position: absolute; top: 0px">
        <a href="https://github.com/lehoang081191"><img src="/admin_layout/images/img4.png" width="145" /></a>
        </div>
        <script type='text/javascript'>
        //<![CDATA[
           function FloatTopDiv()
            {
               startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftQCjust , startLY = TopQCjust+80;
                startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightQCjust , startRY = TopQCjust+80;
                var d = document;
                function ml(id)
                {
                    var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                    el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                    el.x = startRX;
                    el.y = startRY;
                    return el;
                }
                function m2(id)
                {
                    var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                    e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                    e2.x = startLX;
                    e2.y = startLY;
                    return e2;
                }
                window.stayTopLeft=function()
                {
                    if (document.documentElement && document.documentElement.scrollTop)
                        var pY =  document.documentElement.scrollTop;
                    else if (document.body)
                        var pY =  document.body.scrollTop;
                     if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else  {startLY = TopQCjust;startRY = TopQCjust;};
                    ftlObj.y += (pY+startRY-ftlObj.y)/16;
                    ftlObj.sP(ftlObj.x, ftlObj.y);
                    ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
                    ftlObj2.sP(ftlObj2.x, ftlObj2.y);
                    setTimeout("stayTopLeft()", 1);
                }
                ftlObj = ml("divQCRight");
                //stayTopLeft();
                ftlObj2 = m2("divQCLeft");
                stayTopLeft();
            }
            function ShowQCDiv()
            {
                var objQCDivRight = document.getElementById("divQCRight");
                var objQCDivLeft = document.getElementById("divQCLeft");
                if (document.body.clientWidth < 1000)
                {
                    objQCDivRight .style.display = "none";
                    objQCDivLeft.style.display = "none";
                }
                else
                {
                    objQCDivRight.style.display = "block";
                    objQCDivLeft.style.display = "block";
                    FloatTopDiv();
                }
            }
        //]]>
        </script>
        <script type='text/javascript'>
        //<![CDATA[
        document.write("<script type='text/javascript' language='javascript'>MainContentW = 1160;LeftBannerW = 142;RightBannerW = 130;LeftQCjust = 25;RightQCjust = 4;TopQCjust = 70;ShowQCDiv();window.onresize=ShowQCDiv;;<\/script>");
        //]]>
        </script>
@endsection
@section('content')

<!-- Blog Entries Column -->
<div class="col-md-8">
    <h2 class="my-4">Bản tin mới
    </h2>
    @foreach($new as $val)
        @if($val->status == 1)
            <!-- Blog Post -->
            <div class="card mb-4">
            <img class="card-img-top" src="{{$val->avatar}}" height="500px" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$val->title}}</h4>
                <u><small>{{$val->category->cate}}</small></u>
                <p class="card-text">{{$val->description}}</p>
                <a href="{{route('home.get.content',$val->changetitle)}}" class="btn btn-primary">Xem thêm &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Được đăng vào lúc <i>{{$val->created_at}}</i> bởi <b>{{$val->author}}</b>
            </div>
            </div>
        @endif
    @endforeach

    <!-- Pagination -->
    <div class="pagination justify-content-center mt-5">
        {{ $new->links() }}
    </div>

  </div>
@endsection
