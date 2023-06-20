function loadData(data){
	if(data=="btn1"){
		document.getElementById("para").innerHTML = "Unless you visit and surf your site regularly, you may not have a very good idea of how quickly your site loads. As Internet speeds improve and people get busier, consumers no longer have patience for slow-moving sites. If any page of your website takes more than a few seconds to appear in full, people will head for hills." ;

	}
	else if(data=="btn2"){
		document.getElementById("para").innerHTML = "Clean and simple navigation is essential to website success. Visitors to your site should be able to find what they are looking for quickly, from any page. Don’t make people dig for information—because they won’t. They’ll give up. The more intuitive your site is the better. Don’t let cleverness or visual imagination keep people from understanding how your site is organized.";

	}
	
	else if(data=="btn3"){
       	document.getElementById("para").innerHTML = "This complaint comes up more than you might think. It’s often the result of putting design ahead of functionality. Colored text, overwhelming backgrounds, small font sizes, or fonts not ideal for Web reading can all cause this problem. When people have trouble reading your website text, they simply won’t read your website text.";

	}
	
	if(data == "btn4"){
document.getElementById("para").innerHTML = "Some stats say as much as 25% of all Web traffic now comes from mobile devices. For anyone who’s ever seen countless faces engulfed in smartphones, that’s no surprise. And yet too many websites are still not optimized for mobile. This is no longer an option, people, it’s essential. Make sure your site is easy to view, read and navigate from a phone.";
	}
	
	if(data == "btn5"){
document.getElementById("para").innerHTML = "We’ve all visited a website through search and discovered a relic that reminds us of what the early days of the Internet looked like. Full, unformatted pages of colored text. Unaligned images or icons. As the Web has become more visual and engaging, these websites stick out like sore thumbs. Worse yet, they actively repel customers.";
	}
	
	if(data == "btn6"){
document.getElementById("para").innerHTML = "While the Web has become more visual, content still reigns supreme. Visitors to your site should be able to find clear and concise information about what you do, who you do it for, and why your product/service is valuable. That includes how to contact you to learn more. Don’t neglect the importance of the information your audience is seeking and a crystal-clear call to action.";
	}
	
	if(data == "btn7"){
		document.getElementById("para").innerHTML = "If your website looks like it’s from (or actually is from) the previous decade, you need to catch up to the times with a full and immediate site redesign.";


	}
	
	
	if(data == "btn8"){
document.getElementById("para").innerHTML = "If visitors are leaving your website without the information they seek, you need to spend some time revising your website content";
	}
	
	if(data == "btn9"){
document.getElementById("para").innerHTML = "If reading text on your website causes squinting and headaches, it’s time to make some different design choices.";
	}
	
	if(data == "btn10"){
document.getElementById("para").innerHTML = "If finding info on your website is more challenging than excavating dinosaur bones, it’s time to rethink your navigation.";
	}
	
	
	if(data == "btn11"){
document.getElementById("para").innerHTML = "If your website makes smartphone users’ fingertips bleed from pinching and zooming, you need to adopt a mobile-responsive design.";
	}
	
	if(data == "btn12"){
document.getElementById("para").innerHTML = "If your website is moving only slightly faster than molasses, it’s time to look under the hood and make some changes.";
	}
	

		
}
function AcceptTerms(){
	var chk = document.getElementById("chkTerms");
	var sub = document.getElementById("subReg");
	
	if(chk.checked){
		sub.disabled = false;
		function myFunction1() {
			        alert(" If you have evidance of photos try below opttion!");

        }
	}else{
		sub.disabled = true;
		
		


	}	
}

function myFunction() {
  alert("Your Selected options are submitted!");
}




function myFunction2() {
  alert("Your poposal successfully submitted!");
}



function myFunction3() {
  alert("Note successfully submitted!");
}
