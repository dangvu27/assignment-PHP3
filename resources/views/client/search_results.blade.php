@extends('client.layouts.master')

@section('title')
 Tìm kiếm
@endsection

@section('content')
<!-- Page heading -->
<div class="container p-t-4 p-b-40">
	<h2 class="f1-l-1 cl2">
		Tìm kiếm 
	</h2>
</div>

<!-- Post -->
<section class="bg0 p-t-70 p-b-55">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8 p-b-80">
				<div class="row">
					@foreach ($articlesTK as $cate)
					<div class="col-sm-6 p-r-25 p-r-15-sr991">
						<!-- Item latest -->
						<div class="m-b-45">
							<a href="{{url('/article',$cate->id)}}" class="wrap-pic-w hov1 trans-03">
								<img src="{{$cate->img}}" alt="IMG">
							</a>

							<div class="p-t-16">
								<h5 class="p-b-5">
									<a href="{{url('/article',$cate->id)}}" class="f1-m-3 cl2 hov-cl10 trans-03">
										{{$cate->title}}
									</a>
								</h5>
								<span class="cl8">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										@foreach ($authorName as $tg)
										@if ($cate->author_id == $tg->id)
										{{$tg->name}}
										@endif
										@endforeach
									</a>

									<span class="f1-s-3 m-rl-3">
										-
									</span>

									<span class="f1-s-3">
										{{$cate->created_at}}
									</span>
								</span>
							</div>
						</div>
					</div>
					@endforeach

				</div>

				<!-- Pagination -->
				<!-- <div class="flex-wr-s-c m-rl--7 p-t-15">
					<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
					<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
				</div> -->
			</div>

			<div class="col-md-10 col-lg-4 p-b-80">
				<div class="p-l-10 p-rl-0-sr991">

					<!-- Most Popular -->
					<div class="p-b-23">
						<div class="how2 how2-cl4 flex-s-c">
							<h3 class="f1-m-2 cl3 tab01-title">
								Bài viết mới
							</h3>
						</div>

						<ul class="p-t-35">
							@foreach ($article5top as $key => $top5)
							<li class="flex-wr-sb-s p-b-22">
								<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
									{{$key+1}}
								</div>

								<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
									{{$top5->title}}
								</a>
							</li>
							@endforeach
						</ul>
					</div>
					<!-- Tag -->
					<!-- <div>
						<div class="how2 how2-cl4 flex-s-c m-b-30">
							<h3 class="f1-m-2 cl3 tab01-title">
								Tags
							</h3>
						</div>

						<div class="flex-wr-s-s m-rl--5">
							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Fashion
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Lifestyle
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Denim
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Streetstyle
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Crafts
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Magazine
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								News
							</a>

							<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
								Blogs
							</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
@endsection