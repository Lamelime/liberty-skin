<?php
class SkinLiberty extends SkinTemplate {

	public $skinname = 'liberty';
	public $stylename = 'Liberty';
	public $template = 'LibertyTemplate';

    public function initPage( OutputPage $out ) {
        parent::initPage( $out );
        $out->addMeta( 'viewport', 'width=device-width, initial-scale=1, maximum-scale=1' );
        $out->addMeta( 'description', 'librewiki' );
        $out->addMeta( 'keywords', 'wiki,librewiki,리브레위키,리브레 위키,' . $this->getSkin()->getTitle() );
		
		/* IOS 기기 및 모바일 크롬에서의 웹앱 옵션 켜기 및 상단바 투명화 */
		$out->addMeta('apple-mobile-web-app-capable', 'Yes');
		$out->addMeta('apple-mobile-web-app-status-bar-style', 'black-translucent');
		$out->addMeta('mobile-web-app-capable', 'Yes');
		
		/* 모바일에서의 테마 컬러 적용 */
		//크롬, 파이어폭스 OS, 오페라
		$out->addMeta('theme-color', '#4188F1');
		//윈도우 폰
		$out->addMeta('msapplication-navbutton-color', '#4188F1'); 
		
		/* OpenGraph */
		$out->addMeta('og:title', $this->getSkin()->getTitle());
		$out->addMeta('og:description', strip_tags($out->mBodytext),'<br>');
		$out->addMeta('og:image','https://librewiki.net/skins/Liberty/img/logo.png' );
		$out->addMeta('og:locale', 'ko_KR' );
		$out->addMeta('og:site_name', 'Librewiki' );
		$out->addMeta('og:url', Title::newFromText("Title")->getFullURL() );
		
		/* 트위터 카드 */
		$out->addMeta('twitter:card', 'summary');
		$out->addMeta('twitter:site', '@librewiki');
		$out->addMeta('twitter:title', $this->getSkin()->getTitle() );
		$out->addMeta('twitter:description', strip_tags($out->mBodytext),'<br>' );
		$out->addMeta('twitter:creator', '@librewiki');
		$out->addMeta('twitter:image', 'https://librewiki.net/skins/Liberty/img/logo.png');
		
		
		
        $out->addModuleScripts( array(
            'skins.liberty.bootstrap'
        ) );
        $out->addModuleScripts( array(
            'skins.liberty.layoutjs'
        ) );
    }

	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
 	        $out->addHeadItem( 'font-awesome', '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />' );
	        $out->addHeadItem( 'google-ads', '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>' );
		$out->addModuleStyles( array(
			'skins.liberty.styles'
		) );
	}
	function addToBodyAttributes( $out, &$bodyAttrs ) {
        $bodyAttrs['class'] .= " Liberty width-size";
    }
}
