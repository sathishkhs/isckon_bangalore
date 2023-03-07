

<style>
   .holder {
    margin:15px 0;
    display:flex;
    justify-content: center;
}
.holder a {
    font-size:16px;
    cursor:pointer;
    margin:0 5px;
    color:#333;
    padding:6px 12px;
}
.holder a:hover {
    background-color:#348f7a;  
    color:#fff;
}
.holder a.jp-previous {
    margin-right:15px;
}
.holder a.jp-next {
    margin-left:15px;
}
.holder a.jp-current,a.jp-current:hover {
    color:#efc94c;
    font-weight:bold;
}
.holder a.jp-disabled,a.jp-disabled:hover {
    color:#bbb;
}
.holder a.jp-current,a.jp-current:hover,.holder a.jp-disabled,a.jp-disabled:hover {
    cursor:default;
    background:none;
}
.holder span {
    margin: 0 5px;
}
.holder a.jp-current{
  background: #348f7a;

}
.holder a:hover{
  color:#fff!important;
}
.tm-sc-clients .item {
 padding:15px 10px;
 margin:15px 0;
 text-align:center
}
.tm-sc-clients .item img {
 transition:all .3s
}
@media (prefers-reduced-motion:reduce) {
 .tm-sc-clients .item img {
  transition:none
 }
}
.tm-sc-clients.tm-sc-clients-grid .item {
 margin:15px 0
}
.tm-sc-clients.clients-animation-grayscale .item img {
 -webkit-filter:grayscale(100%);
 filter:grayscale(100%);
 opacity:.5
}
.tm-sc-clients.clients-animation-grayscale .item:hover img {
 -webkit-filter:grayscale(0);
 filter:grayscale(0);
 opacity:1
}
.tm-sc-clients.clients-animation-opacity .item img {
 opacity:.7
}
.tm-sc-clients.clients-animation-opacity .item:hover img {
 opacity:1
}
.tm-sc-clients.clients-animation-blur .item:hover img {
 -webkit-filter:blur(1px);
 filter:blur(1px)
}
.tm-sc-clients.clients-animation-zoom .item img {
 -webkit-transform:scale(.95);
 -moz-transform:scale(.95);
 -ms-transform:scale(.95);
 transform:scale(.95)
}
.tm-sc-clients.clients-animation-zoom .item:hover img {
 -webkit-transform:scale(1);
 -moz-transform:scale(1);
 -ms-transform:scale(1);
 transform:scale(1)
}
.tm-sc-clients.clients-animation-contrast .item:hover img {
 -webkit-filter:contrast(300%);
 filter:contrast(300%)
}
.tm-sc-clients.clients-animation-invert .item:hover img {
 -webkit-filter:invert(100%);
 filter:invert(100%)
}
.tm-sc-clients.clients-animation-rollover .item {
 position:relative;
 overflow:hidden;
 margin:0;
 padding:0;
 border:none
}
.tm-sc-clients.clients-animation-rollover .item:hover .client-thumb {
 -webkit-transform:translateY(100%);
 -moz-transform:translateY(100%);
 transform:translateY(100%)
}
.tm-sc-clients.clients-animation-rollover .item:hover .client-thumb-hover {
 -webkit-transform:translate(-50%,0);
 -moz-transform:translate(-50%,0);
 transform:translate(-50%,0)
}
.tm-sc-clients.clients-animation-rollover .item .client-thumb {
 position:relative;
 display:block;
 width:auto;
 margin:0 auto;
 -webkit-transition:-webkit-transform .4s cubic-bezier(.86,.15,.19,.93);
 -moz-transition:-moz-transform .4s cubic-bezier(.86,.15,.19,.93);
 transition:transform .4s cubic-bezier(.86,.15,.19,.93)
}
.tm-sc-clients.clients-animation-rollover .item .client-thumb-hover {
 position:absolute;
 top:0;
 left:50%;
 width:auto;
 -webkit-transform:translate(-50%,-100%);
 -moz-transform:translate(-50%,-100%);
 transform:translate(-50%,-100%);
 -webkit-transition:-webkit-transform .4s cubic-bezier(.86,.15,.19,.93);
 -moz-transition:-moz-transform .4s cubic-bezier(.86,.15,.19,.93);
 transition:transform .4s cubic-bezier(.86,.15,.19,.93)
}
.tm-sc-clients.bgcolor-logo .item {
 background-color:#fff;
 margin-bottom:30px
}
.tm-sc-clients.client-white .item {
 border:1px solid rgba(203,203,203,.2)
}
.tm-sc-clients.clients-grid {
 align-items:center;
 display:flex;
 flex-direction:row;
 flex-wrap:wrap;
 justify-content:space-between
}
.tm-sc-clients.clients-grid .item {
 flex:0 0 20%;
 max-width:20%;
 margin-bottom:40px
}
.tm-departments-item {
 margin-bottom:40px
}
.tm-departments-item .details .title {
 margin-top:15px
}
.departments .entry-content li,
.service-excerpt li {
 list-style:outside none none
}
.owl-carousel .tm-departments-item {
 margin-bottom:30px
}
.service-excerpt {
 margin-bottom:30px
}
.tm-sc-departments-tab {
 border-radius:10px;
 box-shadow:0 0 50px rgba(5,5,5,.08);
 background:#fff
}
.tm-sc-departments-tab .nav-tabs {
 border-bottom:1px solid #f1f1f1;
 text-align:center
}
.tm-sc-departments-tab .nav-tabs>li {
 border-left:1px solid #eee;
 margin-bottom:0;
 width:20%;
 text-align:center;
 border-bottom:5px solid #eee
}
.tm-sc-departments-tab .nav-tabs>li:first-child {
 border-left:none
}
.tm-sc-departments-tab .nav-tabs>li>a {
 display:block;
 color:#a9a9a9;
 font-size:13px;
 margin-right:0;
 padding:30px 20px;
 border:none;
 text-transform:uppercase
}
.tm-sc-departments-tab .nav-tabs>li>a i {
 font-size:3rem;
 line-height:1;
 margin-right:0;
 margin-bottom:15px;
 vertical-align:middle
}
.tm-sc-departments-tab .nav-tabs>li>a img {
 margin-bottom:5px;
 max-width:70px
}
.tm-sc-departments-tab .nav-tabs>li>a span {
 display:block
}
.tm-sc-departments-tab .tab-content .sub-title {
 color:#bbb
}
@media (max-width:1199.98px) {
 .tm-sc-departments-tab .tab-content {
  margin-bottom:30px
 }
}
@media (max-width:991.98px) {
 .tm-sc-departments-tab .tab-content {
  padding:30px
 }
}
.tm-sc-departments-tab .tab-content li {
 list-style:none
}
.tm-sc-departments-tab .tab-content .btn-view-details {
 margin-top:30px
}
@media (max-width:767.98px) {
 .tm-sc-departments-tab .nav.nav-tabs a {
  padding:10px 0;
  font-size:9px
 }
 .tm-sc-departments-tab .nav.nav-tabs a i {
  font-size:28px;
  margin-top:10px
 }
 .tm-sc-departments-tab .nav.nav-tabs a span {
  display:none
 }
}
.departments-single-wrapper .departments-content .thumb {
 margin-bottom:20px
}
.departments-single-wrapper .list-departments a.list-group-item.active,
.departments-single-wrapper .list-departments a.list-group-item:focus,
.departments-single-wrapper .list-departments a.list-group-item:hover,
.departments-single-wrapper .list-departments button.list-group-item.active,
.departments-single-wrapper .list-departments button.list-group-item:focus,
.departments-single-wrapper .list-departments button.list-group-item:hover {
 background-color:#f5f5f5;
 color:#555;
 border:1px solid #ddd;
 border-left:4px solid #ccc;
 transition:all .4s ease
}
@media (prefers-reduced-motion:reduce) {
 .departments-single-wrapper .list-departments a.list-group-item.active,
 .departments-single-wrapper .list-departments a.list-group-item:focus,
 .departments-single-wrapper .list-departments a.list-group-item:hover,
 .departments-single-wrapper .list-departments button.list-group-item.active,
 .departments-single-wrapper .list-departments button.list-group-item:focus,
 .departments-single-wrapper .list-departments button.list-group-item:hover {
  transition:none
 }
}
.departments-single-wrapper .departments-sidebar .list-group-item-title {
 text-transform:uppercase
}
.gallery-items-rounded .effect-wrapper {
 border-radius:6px
}
.tm-sc-gallery .tm-gallery.box-hover-effect {
 display:block
}
.tm-sc-gallery .tm-gallery.box-hover-effect .effect-wrapper {
 background-color:#b2afab;
 border:1px solid #f3f1f1
}
.tm-sc-gallery .tm-gallery.box-hover-effect:hover .effect-wrapper .thumb {
 -webkit-transform:scale(.95);
 -moz-transform:scale(.95);
 -ms-transform:scale(.95);
 transform:scale(.95)
}
.tm-sc-gallery .tm-gallery.box-hover-effect:hover .effect-wrapper .overlay-shade {
 opacity:.85;
 filter:alpha(opacity=70)
}
.tm-sc-gallery .text-holder .title {
 font-size:18px;
 text-transform:uppercase
}
.tm-sc-gallery .text-holder .date,
.tm-sc-gallery .text-holder .category {
 color:#aaa;
 font-size:12px
}
.tm-sc-gallery .overlay-shade.shade-white + .text-holder .date,
.tm-sc-gallery .overlay-shade.shade-white + .text-holder .category {
 color:#777
}
.tm-sc-gallery .overlay-shade.shade-theme-colored1 + .text-holder .title,
.tm-sc-gallery .overlay-shade.shade-theme-colored1 + .text-holder .date,
.tm-sc-gallery .overlay-shade.shade-theme-colored1 + .text-holder .category,
.tm-sc-gallery .overlay-shade.shade-theme-colored2 + .text-holder .title,
.tm-sc-gallery .overlay-shade.shade-theme-colored2 + .text-holder .date,
.tm-sc-gallery .overlay-shade.shade-theme-colored2 + .text-holder .category {
 color:#fff
}
.tm-sc-gallery.tm-sc-gallery-masonry-tiles .has-masonry-tiles-fixed-image-size.isotope-layout .isotope-item .isotope-item-inner {
 height:100%
}
.tm-sc-gallery.tm-sc-gallery-masonry-tiles .has-masonry-tiles-fixed-image-size.isotope-layout .isotope-item .isotope-item-inner .tm-gallery-inner {
 height:100%
}
.tm-sc-gallery.tm-sc-gallery-masonry-tiles .has-masonry-tiles-fixed-image-size.isotope-layout .isotope-item .isotope-item-inner .tm-gallery-inner .thumb {
 height:100%
}
.tm-sc-gallery.tm-sc-gallery-masonry-tiles .has-masonry-tiles-fixed-image-size.isotope-layout .isotope-item .isotope-item-inner .tm-gallery-inner .thumb a {
 height:100%
}
.tm-sc-gallery.tm-sc-gallery-masonry-tiles .has-masonry-tiles-fixed-image-size.isotope-layout .isotope-item .isotope-item-inner .tm-gallery-inner .thumb a img {
 height:100%
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery {
 position:relative;
 overflow:hidden
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .thumb {
 overflow:hidden;
 position:relative;
 -webkit-transform:scale(1);
 -moz-transform:scale(1);
 transform:scale(1);
 -webkit-transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s;
 transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper {
 box-sizing:border-box;
 padding:20px;
 position:absolute;
 left:0;
 top:0;
 height:100%;
 width:100%
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content {
 display:table;
 height:100%;
 width:100%;
 overflow:hidden
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content:after {
 content:'';
 /*background-color:rgba(24,19,60,.75);*/
 position:absolute;
 top:20px;
 left:20px;
 bottom:20px;
 right:20px;
 opacity:0;
 -webkit-transform-origin:0 0;
 -moz-transform-origin:0 0;
 transform-origin:0 0;
 -webkit-transform:scaleY(0);
 -moz-transform:scaleY(0);
 transform:scaleY(0);
 -webkit-transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s .5s;
 transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s .5s
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner {
 display:table-cell;
 padding:20px;
 height:100%;
 width:100%;
 position:relative;
 vertical-align:middle;
 text-align:center;
 z-index:9
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .title-holder {
 overflow:hidden
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .title-holder .title {
 text-transform:uppercase;
 color:#fff
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .title-holder .title a:hover {
 color:#ccc
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .title,
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .styled-icons {
 position:relative;
 opacity:0;
 -webkit-transform:translate3d(0,-100%,0);
 -moz-transform:translate3d(0,-100%,0);
 transform:translate3d(0,-100%,0);
 -webkit-transition:-webkit-transform .4s,opacity .2s;
 transition:transform .4s,opacity .2s;
 will-change:transform,opacity
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .icons-holder-inner {
 overflow:hidden
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery:hover .thumb {
 -webkit-transform:scale(1.1);
 -moz-transform:scale(1.1);
 transform:scale(1.1)
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery:hover .tm-gallery-content-wrapper .tm-gallery-content:after {
 opacity:1;
 -webkit-transform:scaleY(1);
 -moz-transform:scaleY(1);
 transform:scaleY(1);
 -webkit-transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s;
 transition:transform .5s cubic-bezier(.57,.04,.06,.84),opacity 0s
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery:hover .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .title {
 opacity:1;
 -webkit-transform:translate3d(0,0,0);
 -moz-transform:translate3d(0,0,0);
 transform:translate3d(0,0,0);
 -webkit-transition:-webkit-transform .6s cubic-bezier(.57,.04,.06,.84) .1s,opacity .2s .1s;
 transition:transform .6s cubic-bezier(.57,.04,.06,.84) .1s,opacity .2s .1s
}
.tm-sc-gallery.gallery-style1-basic .tm-gallery:hover .tm-gallery-content-wrapper .tm-gallery-content .tm-gallery-content-inner .styled-icons {
 opacity:1;
 -webkit-transform:translate3d(0,0,0);
 -moz-transform:translate3d(0,0,0);
 transform:translate3d(0,0,0);
 -webkit-transition:-webkit-transform .6s cubic-bezier(.57,.04,.06,.84) .2s,opacity .2s .2s;
 transition:transform .6s cubic-bezier(.57,.04,.06,.84) .2s,opacity .2s .2s
}
.isotope-layout-filter,
.carousel-layout-filter {
 margin-bottom:30px
}
.isotope-layout-filter a,
.carousel-layout-filter a {
 transition:all 100ms ease-in-out 0s;
 color:#777;
 font-size:15px;
 font-weight:500;
 margin:0 5px 10px;
 padding:8px 20px 6px;
 display:inline-block;
 position:relative;
 text-transform:uppercase;
 border:2px solid;
 border-color:transparent
}
@media (prefers-reduced-motion:reduce) {
 .isotope-layout-filter a,
 .carousel-layout-filter a {
  transition:none
 }
}
.isotope-layout-filter a.active,
.isotope-layout-filter a:focus,
.isotope-layout-filter a:hover,
.carousel-layout-filter a.active,
.carousel-layout-filter a:focus,
.carousel-layout-filter a:hover {
 color:#fff;
 background:#343434
}
.isotope-layout-filter.filter-style-2 a,
.carousel-layout-filter.filter-style-2 a {
 border-color:#343434
}
.isotope-layout-filter.filter-style-3 a,
.carousel-layout-filter.filter-style-3 a {
 border-color:#eee
}
.isotope-layout-filter.filter-style-4 a,
.carousel-layout-filter.filter-style-4 a {
 background-color:#f7f7f7
}
.isotope-layout-filter.filter-style-4 a.active,
.isotope-layout-filter.filter-style-4 a:focus,
.isotope-layout-filter.filter-style-4 a:hover,
.carousel-layout-filter.filter-style-4 a.active,
.carousel-layout-filter.filter-style-4 a:focus,
.carousel-layout-filter.filter-style-4 a:hover {
 background:#343434
}
.isotope-layout-filter.filter-style-5 a,
.carousel-layout-filter.filter-style-5 a {
 border-radius:7px
}
.isotope-layout-filter.filter-style-6 a,
.carousel-layout-filter.filter-style-6 a {
 border-radius:7px;
 border-color:#343434
}
.isotope-layout-filter.filter-style-7 a,
.carousel-layout-filter.filter-style-7 a {
 border-radius:7px;
 border-color:#eee
}
.isotope-layout-filter.filter-style-8 a,
.carousel-layout-filter.filter-style-8 a {
 border-radius:7px;
 background-color:#f7f7f7
}
.isotope-layout-filter.filter-style-8 a.active,
.isotope-layout-filter.filter-style-8 a:focus,
.isotope-layout-filter.filter-style-8 a:hover,
.carousel-layout-filter.filter-style-8 a.active,
.carousel-layout-filter.filter-style-8 a:focus,
.carousel-layout-filter.filter-style-8 a:hover {
 background:#343434
}
.isotope-layout-filter.filter-style-9 a,
.carousel-layout-filter.filter-style-9 a {
 border-width:2px;
 border-radius:30px
}
.isotope-layout-filter.filter-style-10 a,
.carousel-layout-filter.filter-style-10 a {
 border-width:2px;
 border-radius:30px;
 border-color:#343434
}
.isotope-layout-filter.filter-style-11 a,
.carousel-layout-filter.filter-style-11 a {
 border-width:2px;
 border-radius:30px;
 border-color:#eee
}
.isotope-layout-filter.filter-style-12 a,
.carousel-layout-filter.filter-style-12 a {
 border-width:2px;
 border-radius:30px;
 background-color:#f7f7f7
}
.isotope-layout-filter.filter-style-12 a.active,
.isotope-layout-filter.filter-style-12 a:focus,
.isotope-layout-filter.filter-style-12 a:hover,
.carousel-layout-filter.filter-style-12 a.active,
.carousel-layout-filter.filter-style-12 a:focus,
.carousel-layout-filter.filter-style-12 a:hover {
 background:#343434
}
.isotope-layout-filter.filter-style-13 a,
.carousel-layout-filter.filter-style-13 a {
 border-width:2px;
 border-radius:15px 0
}
.isotope-layout-filter.filter-style-14 a,
.carousel-layout-filter.filter-style-14 a {
 border-width:2px;
 border-radius:15px 0;
 border-color:#343434
}
.isotope-layout-filter.filter-style-15 a,
.carousel-layout-filter.filter-style-15 a {
 border-width:2px;
 border-radius:15px 0;
 border-color:#eee
}
.isotope-layout-filter.filter-style-16 a,
.carousel-layout-filter.filter-style-16 a {
 border-width:2px;
 border-radius:15px 0;
 background-color:#f7f7f7
}
.isotope-layout-filter.filter-style-16 a.active,
.isotope-layout-filter.filter-style-16 a:focus,
.isotope-layout-filter.filter-style-16 a:hover,
.carousel-layout-filter.filter-style-16 a.active,
.carousel-layout-filter.filter-style-16 a:focus,
.carousel-layout-filter.filter-style-16 a:hover {
 background:#343434
}
.isotope-layout-filter.filter-style-flat a,
.carousel-layout-filter.filter-style-flat a {
 margin-left:20px;
 padding:0;
 background:none;
 border-bottom:1px solid transparent
}
.isotope-layout-filter.filter-style-flat a.active,
.isotope-layout-filter.filter-style-flat a:focus,
.isotope-layout-filter.filter-style-flat a:hover,
.carousel-layout-filter.filter-style-flat a.active,
.carousel-layout-filter.filter-style-flat a:focus,
.carousel-layout-filter.filter-style-flat a:hover {
 color:#333;
 border-bottom-color:#333
}
.isotope-layout-filter.filter-style-flat a:first-child,
.carousel-layout-filter.filter-style-flat a:first-child {
 margin-left:0
}
.isotope-layout-filter.btn-group a,
.carousel-layout-filter.btn-group a {
 background-color:#fcfcfc
}
.isotope-layout-filter.btn-group a.active,
.isotope-layout-filter.btn-group a:focus,
.isotope-layout-filter.btn-group a:hover,
.carousel-layout-filter.btn-group a.active,
.carousel-layout-filter.btn-group a:focus,
.carousel-layout-filter.btn-group a:hover {
 box-shadow:none;
 background-color:#444;
 color:#fff
}
.isotope-layout-sorter {
 margin-bottom:30px
}
.isotope-layout-sorter a {
 background-color:#fcfcfc;
 transition:all 100ms ease-in-out 0s
}
@media (prefers-reduced-motion:reduce) {
 .isotope-layout-sorter a {
  transition:none
 }
}
.isotope-layout-sorter a.active,
.isotope-layout-sorter a:hover {
 box-shadow:none;
 background-color:#444;
 color:#fff
}
@media (max-width:575.98px) {
 .isotope-layout-sorter a {
  margin-bottom:10px
 }
}
.isotope-layout {
}
.isotope-layout .isotope-layout-inner {
 position:relative
}
.isotope-layout .isotope-item {
 padding:0 15px;
 margin:0 0 30px;
 float:left;
 width:25%
}
.isotope-layout .isotope-item .isotope-item-inner {
 position:relative;
 height:100%
}
.isotope-layout .isotope-item.tm-masonry-large-wide,
.isotope-layout .isotope-item.tm-masonry-large-width-height {
 width:50%
}
.isotope-layout .isotope-item.isotope-item-sizer {
 padding:0!important;
 margin-bottom:0!important;
 width:25%
}
.isotope-layout .isotope-item.isotope-item-sizer.tm-masonry-large-wide,
.isotope-layout .isotope-item.isotope-item-sizer.tm-masonry-large-width-height {
 width:50%
}
.isotope-layout .isotope-item .thumb img {
 width:100%;
 object-fit:cover;
}
.isotope-layout.isotope-layout-single-item:not(.shop-archive) {
 margin-left:0
}
.isotope-layout.isotope-layout-single-item:not(.shop-archive) .isotope-item {
 padding-right:0;
 padding-left:0
}
.isotope-layout.isotope-layout-single-item:not(.shop-archive) .isotope-item .hentry {
 margin-bottom:0;
 padding-bottom:0
}
.isotope-layout.grid-1 .isotope-item {
 width:100%
}
.isotope-layout.grid-1 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-1 .isotope-item.tm-masonry-large-width-height {
 width:100%
}
.isotope-layout.grid-2 .isotope-item {
 width:49.99%
}
.isotope-layout.grid-2 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-2 .isotope-item.tm-masonry-large-width-height {
 width:100%
}
.isotope-layout.grid-3 .isotope-item {
 width:33.2%
}
.isotope-layout.grid-3 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-3 .isotope-item.tm-masonry-large-width-height {
 width:66.4%
}
.isotope-layout.grid-4 {
 width:100.1%;
 width:calc(100% + 1px)
}
.isotope-layout.grid-4 .isotope-item {
 width:25%
}
.isotope-layout.grid-4 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-4 .isotope-item.tm-masonry-large-width-height {
 width:50%
}
.isotope-layout.grid-5 .isotope-item {
 width:20%
}
.isotope-layout.grid-5 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-5 .isotope-item.tm-masonry-large-width-height {
 width:40%
}
.isotope-layout.grid-6 .isotope-item {
 width:16.5%
}
.isotope-layout.grid-6 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-6 .isotope-item.tm-masonry-large-width-height {
 width:33%
}
.isotope-layout.grid-7 .isotope-item {
 width:14.2%
}
.isotope-layout.grid-7 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-7 .isotope-item.tm-masonry-large-width-height {
 width:28.4%
}
.isotope-layout.grid-8 .isotope-item {
 width:12.5%
}
.isotope-layout.grid-8 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-8 .isotope-item.tm-masonry-large-width-height {
 width:25%
}
.isotope-layout.grid-9 .isotope-item {
 width:11%
}
.isotope-layout.grid-9 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-9 .isotope-item.tm-masonry-large-width-height {
 width:22%
}
.isotope-layout.grid-10 .isotope-item {
 width:10%
}
.isotope-layout.grid-10 .isotope-item.tm-masonry-large-wide,
.isotope-layout.grid-10 .isotope-item.tm-masonry-large-width-height {
 width:20%
}
.isotope-layout .isotope-layout-inner {
 margin:0 -15px
}
.isotope-layout .isotope-item {
 padding:0 15px;
 margin:0 0 30px
}
.isotope-layout.gutter .isotope-layout-inner {
 margin:0 -15px
}
.isotope-layout.gutter .isotope-item {
 padding:0 15px;
 margin:0 0 30px
}
.isotope-layout.gutter-0 .isotope-layout-inner {
 margin:0
}
.isotope-layout.gutter-0 .isotope-item {
 padding:0;
 margin:0
}
.isotope-layout.gutter-5 .isotope-layout-inner {
 margin:0 -5px
}
.isotope-layout.gutter-5 .isotope-item {
 padding:0 5px;
 margin:0 0 10px
}
.isotope-layout.gutter-10 .isotope-layout-inner {
 margin:0 -10px
}
.isotope-layout.gutter-10 .isotope-item {
 padding:0 10px;
 margin:0 0 20px
}
.isotope-layout.gutter-15 .isotope-layout-inner {
 margin:0 -15px
}
.isotope-layout.gutter-15 .isotope-item {
 padding:0 15px;
 margin:0 0 30px
}
.isotope-layout.gutter-20 .isotope-layout-inner {
 margin:0 -20px
}
.isotope-layout.gutter-20 .isotope-item {
 padding:0 20px;
 margin:0 0 40px
}
.isotope-layout.gutter-30 .isotope-layout-inner {
 margin:0 -30px
}
.isotope-layout.gutter-30 .isotope-item {
 padding:0 30px;
 margin:0 0 60px
}
.isotope-layout.gutter-40 .isotope-layout-inner {
 margin:0 -40px
}
.isotope-layout.gutter-40 .isotope-item {
 padding:0 40px;
 margin:0 0 80px
}
.isotope-layout.gutter-50 .isotope-layout-inner {
 margin:0 -50px
}
.isotope-layout.gutter-50 .isotope-item {
 padding:0 50px;
 margin:0 0 100px
}
.isotope-layout.gutter-60 .isotope-layout-inner {
 margin:0 -60px
}
.isotope-layout.gutter-60 .isotope-item {
 padding:0 60px;
 margin:0 0 120px
}
@media (max-width:1199.98px) {
 .isotope-layout .isotope-item {
  width:50%!important
 }
 .isotope-layout .isotope-item.tm-masonry-large-wide,
 .isotope-layout .isotope-item.tm-masonry-large-width-height {
  width:100%!important
 }
}
@media (max-width:991.98px) {
 .isotope-layout .isotope-item {
  width:50%!important
 }
 .isotope-layout .isotope-item.tm-masonry-large-wide,
 .isotope-layout .isotope-item.tm-masonry-large-width-height {
  width:100%!important
 }
}
@media (max-width:767.98px) {
 .isotope-layout .isotope-item {
  width:100%!important
 }
 .isotope-layout .isotope-item.tm-masonry-large-wide,
 .isotope-layout .isotope-item.tm-masonry-large-width-height {
  width:100%!important
 }
}
@media (max-width:575.98px) {
 .isotope-layout .isotope-item {
  width:100%!important
 }
 .isotope-layout .isotope-item.tm-masonry-large-wide,
 .isotope-layout .isotope-item.tm-masonry-large-width-height {
  width:100%!important
 }
}
  </style>
 <link href="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css" rel="stylesheet">

  <section>
      <div class="container pb-40 mt-5">

        
        <?php if(empty($gallery_images)){ ?>
          <div class="row">
            <div class="col-md-12">
            <div class="title-wrapper mb-1 text-center">
              <!-- <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1">Gallery</h6> -->
              <h2 class="title mb-0">No Images Found</h2>
            </div>
            </div>
          </div>
          <?php }else{ ?>
          <?php $galleries = $this->db->select('*')->where('status_ind','1')->get('gallery')->result(); ?>
          <div class="container">
              <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
                        <select id="gallery-select" class="form-control" onchange="window.location=this.value">
                                <option>Select a page to go</option>
                                <?php foreach($galleries as $gallery){ ?>
                                <option value="<?php echo base_url().'gallery/gallery_images/'.$gallery->gallery_id .'/'. $gallery->category_id; ?>"><a href="<?php echo 'gallery/gallery_images/'.$gallery->gallery_id .'/'. $gallery->category_id; ?>"><?php echo $gallery->gallery_name; ?></a></option>
                                
                                <?php } ?>
                        </select>
                    </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
                    <h2 class="sec-title"><?php echo $this->db->where('gallery_id',$gallery_id)->get('gallery')->row()->gallery_name; ?></h2>
                    <p class="text-center">Glimpses of Impact Guru Foundation</p>
                    </div>
              </div>
          </div>
                    
                       
                <!--<div>-->
                <!--    <h2 class="sec-title"><?php echo $this->db->where('gallery_id',$gallery_id)->get('gallery')->row()->gallery_name; ?> </h2>-->
                <!--    <p class="text-center">Glimpses of Impact Guru Foundation</p>-->
                    
                <!--</div>-->
      <!--<div class="tm-sc-section-title section-title text-center mb-40">-->
      <!--    <div class="row justify-content-md-center">-->
      <!--      <div class="col-sm-12 col-md-8 col-lg-8 col-xl-6 col-xxl-5">-->
      <!--        <div class="title-wrapper mb-1">-->
      <!--          <h6 class="subtitle line-shape-bottom line-shape-center text-theme-colored1"><?php echo $this->db->where('gallery_id',$gallery_id)->get('gallery')->row()->gallery_name; ?></h6>-->
               
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->

        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic">
              
                
                <!-- Isotope Gallery Grid -->
                <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox ">
                  <div class=" " id="itemContainer">
                <?php if(!empty($gallery_images)){ 
          foreach($gallery_images as $image){  ?>
                    <!-- Isotope Item Start -->
                    <div class="isotope-item <?php echo str_replace(' ','-', $this->db->where('category_id',$image->gallery_id)->get('gallery')->row()->gallery_name); ?>">
                      <div class="isotope-item-inner">
                        <div class="tm-gallery">
                          <div class="tm-gallery-inner">
                            <div class="thumb">
                              <a href="#">
                                <img width="572" height="348" src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" class="lazyload" alt="" />
                              </a>
                            </div>
                            <div class="tm-gallery-content-wrapper">
                              <div class="tm-gallery-content">
                                <div class="tm-gallery-content-inner">
                                  <!--<div class="icons-holder-inner">-->
                                  <!--  <div class="styled-icons icon-dark icon-circled icon-theme-colored2">-->
                                  <!--    <a class="lightgallery-trigger styled-icons-item" data-exthumbimage="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" data-src="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>" title="Gallery 1" href="<?php echo GALLERY_UPLOAD_PATH . $image->gallery_img_path; ?>"><i class="fa fa-search-plus"></i></a>-->
                                      <!-- <a class="styled-icons-item" title="<?php echo $gallery->gallery_name; ?>" href="#"><i class="fa fa-link"></i></a> -->
                                  <!--  </div>-->
                                  <!--</div>-->
                                  <!--<div class="title-holder">-->
                                  <!--  <h5 class="title"><a href="#"><?php echo $gallery->gallery_name; ?></a></h5>-->
                                  <!--</div>-->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    <?php } } ?>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
        <?php } ?>
      </div>
      
    </section>

    <div class="holder">
</div>

