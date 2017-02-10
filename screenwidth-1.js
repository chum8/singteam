// JavaScript Document
<script type="text/javascript" language="javascript">
var mySheet = document.styleSheets[0]
if (screen.width < 1100) 
{
	addCSSRule("#all", "width: 1100px")
	addCSSRule("#recent_results", "width: 1100px")
}
else {
addCSSRule("#all", "width: " + screen.width + "px")
addCSSRule("#recent_results", "width: " + screen.width + "px")
}
//}
function addCSSRule(selector, newRule) {
  if (mySheet.addRule) { mySheet.addRule(selector, newRule); } 
  else {  ruleIndex = mySheet.cssRules.length;   mySheet.insertRule(selector + '{' + newRule + ';}', ruleIndex); } // endif mySheet.addRule
 } // end addCSSRule()

</script>