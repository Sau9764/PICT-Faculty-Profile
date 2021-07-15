// editDetails_js.php

//onload
		window.onload = function(){
			var x = window.location.href;
			var idname = x.split("#");
			if(idname.length == 2){
				displayblock(idname[1]);
			}
		}

		function signOut() {
			var auth2 = gapi.auth2.getAuthInstance();
			revokeAllScopes();
			auth2.signOut().then(function () {
				console.log('User signed out.');
				revokeAllScopes();
			});
		}

		//  menu 1
		
		//personal details edit
		var editpersonalBTN = 0;
		function editpersonal(){
			editpersonalBTN = 1;
			var x = document.getElementsByClassName("editable");
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditpersonal(){
			if(editpersonalBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		// menu 2
		//Qualifications
		var editqualiBTN = 0;
		function editqualifications(){
			editqualiBTN = 1;
			var x = document.getElementsByClassName('qdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditqualifications() {
			if(editqualiBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}
		

		// menu 3
		//experience details edit
		var editexperienceBTN = 0;
		function editexperience(){
			editexperienceBTN = 1;
			var x = document.getElementsByClassName('exdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditexperience() {
			if(editexperienceBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		//other details
		var editotherdBTN = 0;
		function editotherdetails(){
			editotherdBTN = 1;
			var x = document.getElementsByClassName('oddetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditotherdetails() {
			if(editotherdBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		

		//Journal Details
		var editjournalBTN = 0;
		function editjournal(){
			editjournalBTN = 1;
			var x = document.getElementsByClassName('jdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditjournal() {
			if(editjournalBTN == 0){
			alert("Please edit some details!");
				return false;
			}
			return true;
		}

		//book details
		var editbooksBTN = 0;
		function editbooks(){
			editbooksBTN = 1;
			var x = document.getElementsByClassName('bdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditbooks() {
			if(editbooksBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		//Confrence details
		var editconferencesBTN = 0;
		function editconferences(){
			editconferencesBTN = 1;
			var x = document.getElementsByClassName('cdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditconferences() {
			if(editconferencesBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		//patent details
		var editpatentsBTN = 0;
		function editpatents(){
			editpatentsBTN = 1;
			var x = document.getElementsByClassName('ptdetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function checkeditpatents() {
			if(editpatentsBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}

		//consultancy details
		var editconsulBTN = 0;
		function editconsul(){
			editconsulBTN = 1;
			var x = document.getElementsByClassName('conddetails');
			for(var i=0; i<x.length ; i++){
				x[i].disabled = false;
			}
		}

		function deleteAllCookies() {
			var cookies = document.cookie.split(";");
			for (var i = 0; i < cookies.length; i++) {
				var cookie = cookies[i];
				var eqPos = cookie.indexOf("=");
				var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
				document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
			}
		}

		function deleteAllCookies() {
			var cookies = document.cookie.split(";");
			for (var i = 0; i < cookies.length; i++) {
				var cookie = cookies[i];
				var eqPos = cookie.indexOf("=");
				var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
				document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
			}
		}

		function checkeditconsul() {
			if(editconsulBTN == 0){
				alert("Please edit some details!");
				return false;
			}
			return true;
		}		

		//for displaying blocks
		function displayblock(s){
			var allpage = document.getElementsByClassName('mycard');
			for(var i=0; i<allpage.length;i++){
				allpage[i].style.display = "none";
			}
			document.getElementById(s).style.display = "block";
		}

		function AdjustDegree(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "BE";
			if(s1.value == "Graduate"){
				var optionArray = ["BE|BE","BTech|BTech"];
			}else if(s1.value == "Post-Graduate"){
				var optionArray = ["ME|ME","MTech|MTech"];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value =pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}

		var auth2;
		var googleUser;

		var appStart = function() {
			gapi.load('auth2', initSigninV2);
		};

		var initSigninV2 = function() {
			if(gapi){
				console.log('gapi valid');
				auth2 = gapi.auth2.init({
				client_id: '423638288873-7h9c8l5uh87tddjndhapvek05dtkra2u.apps.googleusercontent.com',
				//scope: 'profile'
				});
				// Listen for sign-in state changes.
				auth2.isSignedIn.listen(signinChanged);
				// Listen for changes to current user.
				auth2.currentUser.listen(userChanged);
				// Sign in the user if they are currently signed in.
				if (auth2.isSignedIn.get() == true) {
					auth2.signIn();
				}
				// Start with the current live values.
				refreshValues();
			}else{
				console.warn('Invalid gapi');
			}
		};

		var signinChanged = function (val) {
			console.log('Signin state changed to ', val);
			if(val==false){
				Redirect();
			}
		};

		var refreshValues = function() {
			if (auth2){
				console.log('Refreshing values...');
				googleUser = auth2.currentUser.get();
				updateGoogleUser();
			}
		}

		var userChanged = function (user) {
			console.log('User now: ', user);
			googleUser = user;
			updateGoogleUser();
		};

		function Redirect () {
			var redirectForm = '<form method="POST" action="logout.php"><input type="submit" id="redirectBtn" /></form>';
			document.getElementById("formDiv").innerHTML = redirectForm;
			document.getElementById("redirectBtn").click();
		}

		function signOut() {
			var auth = gapi.auth2.getAuthInstance();
			auth.disconnect();
			auth.signOut().then(function () {
				console.log('User signed out.');
			});
			Redirect();
		}
