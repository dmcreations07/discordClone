$(function(){
	let btnwindows = $(".btn");
	let btnOpenBrowser = $(".openInBrowser");
	let btnbrowserUsername = $(".usernameDiv");
	btnbrowserUsername.hide();

	btnOpenBrowser.click(function(){
		btnwindows.slideUp(100);
		btnOpenBrowser.slideUp(100);
		btnbrowserUsername.slideDown("500");
	});
});