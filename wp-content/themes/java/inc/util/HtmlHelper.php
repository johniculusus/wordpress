<?
	static String $DEFAULT_JSTYPE = "text/javascript";
	static String $DEFAULT_CSSTYPE = "text/css";
	static String $DEFAULT_CSSREL = "stylesheet";
	
	/**
	 * @param attribute - Common html attributes
	 * @param value - Html attribute value
	 * @return [attribute name]="[attribute value]"
	 */
	function getValidHtmlAttibute($attribute, $value) {
		if ($value != null && strlen($value)>0)
			return " " .$attribute. "=\"" .$value. "\"";
		else
			return "";
	}
	
	function getValidType($jsType) {
		return getValidHtmlAttibute("type", $jsType);
	}
	
	function getValidCssRel($cssRel) {
		return getValidHtmlAttibute("rel", $cssRel);
	}
	
	function getValidSrc($src) {
		return getValidHtmlAttibute("src", $src);
	}
	
	function getValidHref($href) {
		return getValidHtmlAttibute("href", $href);
	}
	
	//HEADERS - JS CSS etc
	function insertJS($src) {
		return "<script" .getValidType($DEFAULT_JSTYPE) + getValidSrc($src). "></script>";
	}
	
	function insertCSS($href) {
		return "<link" .getValidHref($href) + getValidType($DEFAULT_CSSTYPE) + getValidCssRel($DEFAULT_CSSREL). ">";
	}
?>