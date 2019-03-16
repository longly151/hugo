<a id="close-sidebar-nav" class="header-2"><i class="fa fa-close"></i></a>

<nav id="sidebar-nav" class="header-2" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">

  <div id="sidebar-nav-logo">
    <a href="/"><img class="penci-lazy" src="images/penci-holder.png"
        data-src="images/logo-o.png"
        alt="Soledad Coffee Blog" /></a>
  </div>

{{-- Left Navigate --}}

  <ul id="menu-menu-1" class="menu">
    <li id="menu-item-7" class="megamenu menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7"><a
        href="/">Trang chủ</a>
    </li>
    <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-40"><a
        href="javascript:void(0);">Chuyên mục</a>
        <ul class="sub-menu">
          @foreach ($topCategories as $topCategory)
              <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-134"><a
              href="/{{$topCategory['url']}}">{{$topCategory['name']}}</a>
              @if ($topCategory['categories'])
              @foreach ($topCategory['categories'] as $category)
                  <ul class="sub-menu">
                      <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-135"><a
                      href="/{{$category['url']}}">{{$category['name']}}</a></li>
                  </ul>
              @endforeach
              @endif
              </li>
          @endforeach
      </ul>
    </li>
    <li id="menu-item-119" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a
      href="/contact">Liên hệ</a></li>
    <li id="menu-item-119" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a
      href="/about">Giới thiệu</a></li>
    {{-- <li id="menu-item-119" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-119"><a target="_blank"
        href="http://soledad.pencidesign.com/shop/">Shop</a></li> --}}
  </ul>
</nav>