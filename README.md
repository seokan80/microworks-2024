# responsive_template
Responsive Website Template

* Giantsoft Publisher Team
* Writer : Jang Mi Hwa
* UpDate : 2019/10/23


  

## 업데이트 내역

- #### 2019/10/23
    
  #### * php 파일
	<code> <b>1. /kr/lib/config.php</b></code>
	* 관리자연동소스로 변경
	
	<code> <b>2. /kr/include/header.php </b></code>
	* 언어선택링크 -> ch대신 cn으로
	
	<code> <b>3. /kr/include/dtd.php </b></code>
	* 네이버폰트 추가 ( https://xpressengine.github.io/XEIcon/library-2.3.3.html )
	* 인증서 script 수정
	
  #### * css 파일
	<code> <b>1. /css/plugin/magnific-popup.css</b></code>
	* X버튼크게변경 / zoom효과 추가
	
  #### * images 폴더
	<code> <b>1. /images/test/</b></code>
	* test 폴더 추가
	
	

***************************

- #### 2019/09/27
    
  #### * php 파일
	<code> <b>1. /kr/include/dtd.php</b></code>
	* SEO최적화로 <link rel="canonical" href="<?=$site_host?>"> 추가

***************************

- #### 2019/09/26
    
  #### * css 파일
	<code> <b>1. /css/reset.css</b></code>
	* table-layout :fixed 넣었더니 반응형에서 테이블속성을 깨는게 힘들어 다시삭제하였습니다.
    
	<code> <b>2. /css/board_resopinsive.css</b></code>
  	* 문의폼/쓰기폼에 phone-fieldset 추가(전화번호 반응형일때 양쪽정렬맞게)
	
	<code> <b>3. /css/layout.css</b></code>
  	* 검색바 transition 속도 

	<code> <b>4. /css/layout_responsive.css</b></code>
  	* 사이트맵 반응형일때 틀어지는부분 수정

	
	<code> <b>5. /css/plugin/jquery.mCustomScrollbar.css</b></code>
  	* 모바일에서 전체스크롤이 안되는 이슈 => 27번째 주석처리 
  
  #### * js 파일
	<code> <b>1. /js/sub.js</b></code>
	* fixed-sub-menu => $(window).scroll() if문 안에 들어가게 변경
    
	<code> <b>2.  /js/nav.js</b></code>
  	* gnb_each_on() 마우스때는지점 수정
	

***************************

- #### 2019/09/10

  #### * php 파일
  <code> <b>1. /kr/include/dtd_ver2.php</b></code>
  <code> <b>2. /kr/include/header_ver2.php</b></code>
    * 삭제
    
  #### * css 파일
  <code> <b>1. /css/layout_menu2.css</b></code>
    * 삭제
    
  <code> <b>2. /css/reset.css</b></code>
  	* table에  table-layout:fixed 추가
	
	<code> <b>3. /css/layout_responsive.css</b></code>
  	* 헤더 검색영역 fixed 시작지점 변경

***************************
  
- #### 2019/09/04

  #### * php 파일
  <code> <b>1. /kr/include/top.php</b></code>
    * 서브비주얼영역 분리 및 효과 추가
    * 서브메뉴 pc,모바일 분리 및 추가 + 아이디값 등 수정 
    * 서브메뉴 fixed 될수있도록 추가 => 서브메뉴가 fixed될때 .fixed-sub-menu 추가
    * #topmenu3 => 텍스트가 길어지면 ... 생기게 처리
    
  <code> <b>2. /kr/include/header.php</b></code>
    * 모바일메뉴 두가지스타일로 수정 및 추가  
      => 기본스타일 : .gnb-style-basic / 
				Full 스타일 : .gnb-style-full
    * 모바일메뉴 언어 및 회원메뉴 추가
    
  #### * css 파일
  <code> <b>1. /css/plugin/slick.css</b></code>
    * Window10 Ie11 이슈로 41번째 주석처리
  <code> <b>2. /css/editor.css</b></code>
    * editor에 url과 같은 긴 텍스트의 a태그가 들어갈때 word-break:break-word; 추가   
    
  <code> <b>3. /css/main.css</b></code>
    * ie에서 메인비주얼 떨리는 부분 수정
    
  <code> <b>4. /css/layout.css, /css/layout_responsive.css</b></code>
    * 공통클래스 추가
    => display:-webkit-box; -webkit-line-clamp 공통클래스로 추가
    * Header 영역 수정
    => 높이관련
    * PC GNB 각각 수정
    * 모바일 GNB 수정 및 추가
    
      => 모든홈페이지에서 사용할 수 있도록 흰색으로 변경     
      => 상단에 언어영역 추가     
      => 로그인, 회원가입 메뉴추가  
      => 스타일 두개로 나눔 
    * 서브비주얼 영역 수정
    => 효과삽입
    * 서브메뉴 수정 및 일부수정
    => pc, 모바일 메뉴분리 및 모바일서브메뉴 1개추가
    * 사이트맵영역 디자인수정
    => css 수정
    
  #### * js 파일
  <code> <b>1. /js/common.js</b></code>
    * 에디터 테이블에 태그넣기
    
  <code> <b>2. /js/nav.js</b></code>
    * pc네비게이션 오픈되는부분 수정
    * 모바일네비게이션 클래스 변경으로 인한 수정
    
  <code> <b>3. /js/main.js</b></code>
    * 메인비주얼 파이어폭스 오류 -> zIndex:1 추가

***************************

- #### 2019/08/29
  <code> <b>1. /kr/include/dtd.php</b></code>  
    * doctype 선언 상단에 빈 영역 삭제    
    * 파비콘 주석처리 시 크롬에서 오류메세지 출력 -> 삭제
    
    =>  <code>```<link rel="Shortcut Icon" href="<?=$site_host?>/favicon.ico">```</code>  
