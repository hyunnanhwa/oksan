<?php
include_once('./g5/common.php');
?>

<?php
include "header.php";
?>

<link rel="stylesheet" href="<?php echo $abc; ?>css/indexonly.css">
<script src="<?php echo $abc; ?>js/index.js"></script>

<!-- main1 -->
<section class="main m1" id="m1">
  <div class="swiper-container m1_left">
    <div class="swiper-wrapper">
      <div class="swiper-slide ms1">
        <div class="img_wrap">
          <img src="img/main/ms_bg02.png" alt="">
        </div>
        <div class="text_area">
          <div class="move animated fadeInUp">
            <p class="times">Point of difference</p>
            <p class="big gyeonggi">
              <span class="bold blue">수산질병관리사가</span> <br>
              만들면 다릅니다.
            </p>
            <p class="ms1_obj">
              <img src="img/main/ms1_obj.png" alt="">
            </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide ms2">
        <div class="img_wrap">
          <img src="img/main/ms_bg01.png" alt="">
        </div>
        <div class="text_area">
          <div class="move animated fadeInUp">
            <p class="times">Safe marine products</p>
            <p class="big gyeonggi">
              믿고 먹을 수 있는<br>
              <span class="bold blue">안전한 수산물</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="m1_control">
      <div class="swiper-progress-bar">
        <span class="slide_progress-bar"></span>
      </div>
      <div class="swiper-button-prev"><i class="xi-angle-left"></i></div>
      <div class="swiper-button-next"><i class="xi-angle-right"></i></div>
      <div class="m1_playbox">
        <div class="swiper-button-pause on"><i class="xi-pause"></i></div>
        <div class="swiper-button-play"><i class="xi-play"></i></div>
      </div>
    </div>
  </div>

  <div class="m1_right">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide m1_right1">
          <div class="m1_right_bg">
            <img src="img/main/m1_right.png" alt="">
          </div>
          <div class="move animated fadeInUp">
            <p class="gyeonggi" data-aos="fade-up">
              <span class="ico"><img src="img/main/ico_store.png" alt=""></span>
              <span class="txt">다양한 제품이 있는 <br>복드림 스마트스토어</span>
            </p>
            <p class="go_shop">
              <a href="https://smartstore.naver.com/bokdream" target="_blank" data-aos="fade-up">
                <span class="txt">바로가기</span>
                <span class="arrow"><img src="img/main/m1_arrow.png" alt=""></span>
              </a>
            </p>
          </div>
        </div>
        <!-- <div class="swiper-slide m1_right2">
          <div class="m1_right_bg">
            <img src="img/main/m1_right2.png" alt="">
          </div>
          <div class="move animated fadeInUp">
            <p class="gyeonggi" data-aos="fade-up">맛과 건강 <br>그리고 간편함까지 <br>더한 복드림 제품</p>
            <p class="go_shop">
              <a href="void(0);" onclick="alert('페이지 준비중입니다.');return false;" data-aos="fade-up">
                <span class="txt">쇼핑몰 바로가기</span>
                <span class="arrow"><img src="img/main/m1_arrow.png" alt=""></span>
              </a>
            </p>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>

<!-- main1-2 -->
<section class="main m6" id="m6">
  <div class="m6_inner">
    <div class="top">
      <div class="left">
        <p class="poppins upper" data-aos="fade-up">fish doctor</p>
        <p class="m6_tit gyeonggi" data-aos="fade-up">
          <span class="bold">수산관리사가</span> <br>
          하나하나 관리합니다
        </p>
        <p class="m6_txt" data-aos="fade-up">
          완도수산질병관리원에서 만드는 수산물로 믿고 드실 수 있습니다. <br>
          안전한 수산물의 유통을 위해 양식 어민들과 함께 <br>
          건강하고 안전한 수산물 생산에 전념을 다하고 있습니다.
        </p>
      </div>
      <div class="right" data-aos="fade-up">
        <div class="m6_right_bg"><img src="img/main/m6_bg.png" alt=""></div>
        <div class="inner">
          <p class="m6_right_tit yellow">완도수산질병관리원은?</p>
          <p class="m6_right_txt white">
            수산질병관리사가 근무하는 곳으로 <br>
            2006년 개원한 수산생물 진료 전문 기업입니다. <br><br>
            육상수조에서 양식되는 넙치와 해상 가두리에서 양식되는 우럭은 <br>
            세균, 바이러스, 기생충 등으로 인해 질병이 발병되는 경우가 많아 <br>
            주기적으로 현장에 방문하여 관리하고 있습니다.
          </p>
          <a href="<?php echo $abc; ?>contact.php?num=6_1" class="m6_more">
            <span class="white poppins medium">view more</span>
            <span class="m6_arrow"><img src="img/main/m6_arrow.png" alt=""></span>
          </a>
        </div>
      </div>
    </div>
    <div class="bot">
      <div class="left">
        <img src="img/main/m6_bot_img.png" alt="" data-aos="fade-up">
      </div>
      <div class="right">
        <p class="m6_tit gyeonggi" data-aos="fade-up">
          다양한 안전성 검사와 관리로 <br>
          <span class="bold">안전한 수산물 제공</span>
        </p>
        <p class="m6_txt" data-aos="fade-up">
          해성인터내셔널에서 취급하는 모든 제품은 치어에서 출하까지 <br>
          직접 관리를 통해 건강하고 신선하며 안전성이 보장됩니다.
          <span class="m6_txt_img"><img src="img/main/m6_txt_img.png" alt=""></span>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- main2 -->
<section class="main m2" id="m2">
  <div class="m2_bg">
    <img src="img/main/m2_bg.png" alt="">
  </div>
  <div class="m_wrap">
    <!-- <div class="haccp" data-aos="fade-up">
      <img src="img/main/m2_haccp.png" alt="">
      <p class="haccp_txt white medium">믿을 수 있는 HACCP 클린사업장 인증</p>
    </div> -->
    <p class="m2_txt white" data-aos="fade-up">
      2가지 중 준비 5단계, 7가지 원칙을 통한 <br>
      까다로운 절차를 통과한 믿을 수 있는 HACCP 클린사업장입니다.
    </p>
  </div>
</section>

<!-- main3 -->
<section class="main m3" id="m3">
  <div class="m3_bg">
    <img src="img/main/m3_bg.png" alt="">
  </div>
  <div class="m_wrap">
    <div class="m3_top">
      <div class="m3_top_inner">
        <div class="inner">
          <p class="big gyeonggi" data-aos="fade-up">
            <span class="bold blue">완도 청정바다가</span> <br>
            주는 건강한 <br>
            재료를 식탁까지
          </p>
          <p class="small upper poppins" data-aos="fade-up">about us</p>
        </div>
      </div>
    </div>
    <div class="m3_right" data-aos="fade-up">
      <!-- <p class="haccp"><img src="img/main/haccp.png" alt=""></p> -->
      <p class="big gyeonggi">
        건강의 섬 <br>
        완도에서 온 <br>
        <span class="bold blue">안전한 재료</span>
      </p>
    </div>
    <div class="m3_cont">
      <p class="notoserif" data-aos="fade-up">
        靑山麗水
      </p>
      <p class="m3_txt" data-aos="fade-up">
        자연경관이 유난히 아름다워 예로부터 청산여수(<span class="notosans">靑山麗水</span>)라 <br>
        불리는 대한민국 완도군은 265개의 크고 작은 섬들이 군도로 이루어져, <br>
        리아스식 해안으로 갯벌과 해조류가 숲을 이룹니다. <br><br>
        바다 밑에는 맥반석과 초석이 깔려 있어 자체 영양염류가 풍부하여 <br>
        우리나라에서 가장 다양한 2,200여종의 바다생물이 서식하는 <br>
        건강한 자연의 섬 입니다.
      </p>
      <ul class="m3_list">
        <li data-aos="fade-up" data-aos-delay="300">
          <div class="list_img">
            <img src="img/main/m3_list01.png" alt="">
          </div>
          <a href="<?php echo $abc ?>contact.php?num=4_1">
          <div class="hov">
            <div class="hov_bg"></div>
            <div class="hov_inner">
              <p class="hov_ico"><img src="img/main/list_ico01.png" alt=""></p>
              <p class="hov_txt">완도에서 온 <br>건강한 광어</p>
            </div>
          </div>
          </a>
        </li>
        <li data-aos="fade-up" data-aos-delay="500">
          <div class="list_img">
            <img src="img/main/m3_list02.png" alt="">
          </div>
          <a href="<?php echo $abc ?>contact.php?num=4_1">
          <div class="hov">
            <div class="hov_bg"></div>
            <div class="hov_inner">
              <p class="hov_ico"><img src="img/main/list_ico02.png" alt=""></p>
              <p class="hov_txt">완도에서 온 <br>건강한 전복</p>
            </div>
          </div>
          </a>
        </li>
        <li data-aos="fade-up" data-aos-delay="700">
          <div class="list_img">
            <img src="img/main/m3_list03.png" alt="">
          </div>
          <a href="<?php echo $abc ?>contact.php?num=4_1">
          <div class="hov">
            <div class="hov_bg"></div>
            <div class="hov_inner">
              <p class="hov_ico"><img src="img/main/list_ico04.png" alt=""></p>
              <p class="hov_txt">믿을 수 있는 <br>국내산 식재료</p>
            </div>
          </div>
          </a>
        </li>
        <li data-aos="fade-up" data-aos-delay="900">
          <div class="list_img">
            <img src="img/main/m3_list04.png" alt="">
          </div>
          <a href="<?php echo $abc ?>contact.php?num=6_1">
          <div class="hov">
            <div class="hov_bg"></div>
            <div class="hov_inner">
              <p class="hov_ico"><img src="img/main/list_ico03.png" alt=""></p>
              <p class="hov_txt">위생적인 <br>생산시설</p>
            </div>
          </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- main4 -->
<section class="main m4" id="m4">
  <div class="m4_bg">
    <img src="img/main/m4_bg.png" alt="">
  </div>
  <div class="m4_wrap">
    <div class="m4_left" data-aos="fade-up">
      <p class="m4_img"><img src="img/main/m4_img01.png" alt=""></p>
      <div class="left_inner">
        <p class="medium blue">복드림 간편죽 제품</p>
        <p class="medium small">완도광어죽 ㅣ 매운완도광어죽 ㅣ 전복죽</p>
        <a href="<?php echo $abc ?>contact.php?num=4_1" class="m4_more">
          <i class="xi-angle-right-thin"></i>
        </a>
        <p class="m4_ico"><img src="img/main/m6_ico01.png" alt=""></p>
      </div>
    </div>
    <div class="m4_middle" data-aos="fade-up">
      <div class="middle_inner">
        <div class="middle_top">
          <p class="big gyeonggi">
            복드림의 <br>
            <span class="bold">맛있는 식탁</span>
          </p>
          <p class="upper poppins">products</p>
        </div>
        <div class="m4_logo">
          <img src="img/main/m4_logo.png" alt="">
        </div>
        <p class="m4_txt medium">
          해성인터내셔널의 식품브랜드 <br>
          <span class="blue">복드림</span>은 우리땅에서 길러낸 <br>
          다양한 원재료로 조화로운 맛을 내는 <br>
          젓갈과 죽 제품들을 소개합니다.
        </p>
        <a href="<?php echo $abc ?>contact.php?num=4_1" class="m4_more2">
          <span class="small poppins medium">view more</span>
          <span class="img"><img src="img/main/m4_arrow.png" alt=""></span>
        </a>
      </div>
    </div>
    <div class="m4_left m4_right" data-aos="fade-up">
      <div class="right_inner">
        <a href="<?php echo $abc ?>contact.php?num=4_1" class="m4_more">
          <i class="xi-angle-right-thin"></i>
        </a>
        <p class="medium blue">복드림 젓갈 제품</p>
        <p class="medium small">낙지젓 ㅣ 무말랭이 ㅣ 비빔젓갈 ㅣ 오징어젓</p>
        <p class="m4_ico"><img src="img/main/m6_ico02.png" alt=""></p>
      </div>
      <p class="m4_img"><img src="img/main/m4_img02.png" alt=""></p>
    </div>
  </div>
</section>

<!-- main5 -->
<section class="main m5" id="m5">
  <div class="m_wrap">
    <p class="m5_tit big gyeonggi" data-aos="fade-up">
      <span class="bold blue">CONTACT</span>
      찾아오시는 길
    </p>
    <div class="m_map" data-aos="fade-up">
      <div class="tab_cont">
        <div id="tab-1" class="tab-content">
          <div class="left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.551464200136!2d129.1303382762745!3d35.167805458006065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356892c742de51d3%3A0xc758fab7d550c5b!2z67aA7IKw6rSR7Jet7IucIO2VtOyatOuMgOq1rCDshLzthYAz66GcIDIw!5e0!3m2!1sko!2skr!4v1689658006785!5m2!1sko!2skr"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="right">
            <p class="map_tit">부산본사</p>
            <p class="map_address">부산광역시 해운대구 <br>센텀3로 20</p>
            <p class="map_address tel">010-2251-5003</p>
            <a href="https://www.google.com/maps/place/%EB%B6%80%EC%82%B0%EA%B4%91%EC%97%AD%EC%8B%9C+%ED%95%B4%EC%9A%B4%EB%8C%80%EA%B5%AC+%EC%84%BC%ED%85%803%EB%A1%9C+20/data=!3m1!4b1!4m6!3m5!1s0x356892c742de51d3:0xc758fab7d550c5b!8m2!3d35.1678011!4d129.1329132!16s%2Fg%2F11bz1vp7rb?hl=ko&entry=ttu"
              targe="_blank" class="map_go">
              <img src="img/main/map_ico.png" alt="">
              <span class="blue">지도보기</span>
            </a>
          </div>
        </div>
        <div id="tab-2" class="tab-content current">
          <div class="left">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3295.1888622264473!2d126.73840948811771!3d34.32020933407604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3572e5abccebef11%3A0xe4d504614f2b2f6e!2z7KCE652864Ko64-EIOyZhOuPhOq1sCDsmYTrj4TsnY0g6rCc7Y-s66GcMTQ167KI6ri4IDExLTg!5e0!3m2!1sko!2skr!4v1689657818402!5m2!1sko!2skr"
              width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="right">
            <p class="map_tit">전남완도 공장</p>
            <p class="map_address">전라남도 완도군 완도읍 개포로<br>145번길 11-8 1층</p>
            <p class="map_address tel">010-4594-5946</p>
            <a href="https://www.google.com/maps?ll=34.320205,126.74328&z=16&t=m&hl=ko&gl=KR&mapclient=embed&q=%EC%A0%84%EB%9D%BC%EB%82%A8%EB%8F%84+%EC%99%84%EB%8F%84%EA%B5%B0+%EC%99%84%EB%8F%84%EC%9D%8D+%EA%B0%9C%ED%8F%AC%EB%A1%9C145%EB%B2%88%EA%B8%B8+11-8"
              target="_blank" class="map_go">
              <img src="img/main/map_ico.png" alt="">
              <span class="blue">지도보기</span>
            </a>
          </div>
        </div>
      </div>
      <ul class="tabs">
        <li class="tab-link" data-tab="tab-1">
          <p class="tabs_tit">부산본사</p>
        </li>
        <li class="tab-link current" data-tab="tab-2">
          <p class="tabs_tit">완도공장</p>
        </li>
      </ul>
    </div>
    <div class="m5_bot">
      <div class="m5_cont" data-aos="fade-up">
        <div class="left">
          <p class="m5_ico"><img src="img/main/m5_ico01.png" alt=""></p>
          <p class="m5_tit">다양한 소식과 이야기</p>
        </div>
        <div class="right">
          <ul class="notice_list">
            <li>
              <a href="http://haesunginternati.cafe24.com/g5/bbs/board.php?bo_table=k_notice">
                <div class="list_ico"><img src="img/main/notice_ico01.png" alt=""></div>
                <div class="list_txt">
                  <p class="times">Notice</p>
                  <p class="medium">해성인터내셔널 공지사항</p>
                </div>
              </a>
            </li>
            <li>
              <a href="void(0);" onclick="alert('페이지 준비중입니다.');return false;">
                <div class="list_ico"><img src="img/main/notice_ico02.png" alt=""></div>
                <div class="list_txt">
                  <p class="times">Catalog</p>
                  <p class="medium">카달로그 다운로드</p>
                </div>
              </a>
            </li>
            <li>
              <a href="http://haesunginternati.cafe24.com/g5/bbs/board.php?bo_table=news">
                <div class="list_ico"><img src="img/main/notice_ico03.png" alt=""></div>
                <div class="list_txt">
                  <p class="times">News</p>
                  <p class="medium">다양한 뉴스게시판</p>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="m5_cont bot" data-aos="fade-up">
        <div class="left">
          <p class="m5_ico"><img src="img/main/m5_ico02.png" alt=""></p>
          <p class="m5_tit">빠른 온라인 문의</p>
        </div>
        <div class="right">
          <?php include "form2.php" ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include "footer.php";
?>