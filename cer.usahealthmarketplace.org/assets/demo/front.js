//var Inputmask = require('inputmask');
//window.jQuery = require('jQuery');

(function($) {
	'use strict';
	$(document).ready(function() {

		//Quiz function
		const quiz = {
			init: function() {
				this.cache();
				this.bind();
				this.lookUp();
				this.colorActive();
				this.testingHover();
				this.active = 1;
				this.popupTarget = null;
				this.cta = $('#cta').data('text');
				this.mode = $('#mode').data('id') == 'lead' ? 'lead' : 'nolead';
				this.data = {};
				this.errors = 0;
				this.loadquiz();
			},
			hasTouch: function() {
				return 'ontouchstart' in document.documentElement || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
			},
			testingHover: function() {
				if (quiz.hasTouch()) {
					// remove all :hover stylesheets
					try {
						// prevent exception on browsers not supporting DOM styleSheets properly
						for (var si in document.styleSheets) {
							var styleSheet = document.styleSheets[si];
							if (!styleSheet.rules) continue;

							for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
								if (!styleSheet.rules[ri].selectorText) continue;

								if (styleSheet.rules[ri].selectorText.match(':hover')) {
									styleSheet.deleteRule(ri);
								}
							}
						}
					} catch (ex) {}
				}
			},
			lookUp: function() {

				//Get ZipCode
				var onSuccess = function(location) {
					// $('#zipcode').val(location.postal.code);
					// quiz.data.ip = location.traits.ip_address;
					// quiz.data.long_state_name = location.subdivisions['0'].names.en;
					// quiz.storedCity = location.city.names.en;
					// quiz.storedZip = location.postal.code;
				};
				var onError = function(error) {
				//	console.log('Error:\n\n' + JSON.stringify(error, undefined, 4));
				};
				if (typeof geoip2 !== "undefined") { 
					// safe to use the function
					geoip2.city(onSuccess, onError);
				}
				else{
					if (typeof quiz.data !== "undefined") { 
					quiz.data.ip = "";
					quiz.data.long_state_name = "";
					}
					quiz.storedCity = "";
					quiz.storedZip = "";
				}
				

//MOD BY JC
				quiz.active = $('.page').data('page');
				$('#page-' + quiz.active).removeClass('hidden');
				

				console.log('active:'+quiz.active)
				if(quiz.active!==4){
				$('.phone_us').mask('(000) 000-0000');

				var age_over65=localStorage.getItem("age_over65");
				if(age_over65!==''){
					/*
					if($radios.is(':checked') === false) {
						$radios.filter('[value=0]').prop('checked', true);
					}
					*/

					if(age_over65==0){
					var $radios = $('input:radio[name=age]');
					
					$radios.filter('[value=0]').prop('checked', true);
					$("label[for='q1-no']").addClass("active");
					}
					else if(age_over65==1){
						var $radios = $('input:radio[name=age]');
						
						$radios.filter('[value=1]').prop('checked', true);
						$("label[for='q1-yes']").addClass("active");
						}

					console.log(age_over65);
				}


				var gender=localStorage.getItem("gender");
				if(gender!==''){

					if(gender=='F'){
					var $radios = $('input:radio[name=gender]');
					
					$radios.filter('[value=F]').prop('checked', true);
					$("label[for='female']").addClass("active");
					}
					else if(gender=='M'){
						var $radios = $('input:radio[name=gender]');
						
						$radios.filter('[value=M]').prop('checked', true);
						$("label[for='male']").addClass("active");
						}
				}


				var enrolled=localStorage.getItem("enrolled");
				if(enrolled!==''){
					/*
					if($radios.is(':checked') === false) {
						$radios.filter('[value=0]').prop('checked', true);
					}
					*/

					if(enrolled==0){
					var $radios = $('input:radio[name=current]');
					
					$radios.filter('[value=0]').prop('checked', true);
					$("label[for='q2-no']").addClass("active");
					}
					else if(enrolled==1){
						var $radios = $('input:radio[name=current]');
						
						$radios.filter('[value=1]').prop('checked', true);
						$("label[for='q2-yes']").addClass("active");
						}

					console.log(enrolled);
				}


				var tobacco=localStorage.getItem("tobacco");
				if(tobacco!==''){
					/*
					if($radios.is(':checked') === false) {
						$radios.filter('[value=0]').prop('checked', true);
					}
					*/

					if(tobacco==0){
					var $radios = $('input:radio[name=tobacco]');
					
					$radios.filter('[value=0]').prop('checked', true);
					$("label[for='q4-no']").addClass("active");
					}
					else if(tobacco==1){
						var $radios = $('input:radio[name=tobacco]');
						
						$radios.filter('[value=1]').prop('checked', true);
						$("label[for='q4-yes']").addClass("active");
						}

					console.log(tobacco);
				}


				/* Parameters for filling the quiz */ 
				let fisrtname=localStorage.getItem("firstname");
				if(fisrtname!==''){
				$('#first').val(fisrtname);
				}

				let lastname=localStorage.getItem("lastname");
				if(lastname!==''){
				$('#last').val(lastname);
				}

				let email=localStorage.getItem("email");
				if(email!==''){
				$('#email').val(email);
				}

				let phone=localStorage.getItem("phone");
				if(phone!==''){
				$('#phone').val(phone);
				}

				let age=localStorage.getItem("age");
				if(age!==''){
				$('#age').val(age);
				}

				let address=localStorage.getItem("address");
				if(address!==''){
				$('#address').val(address);
				}

				let city=localStorage.getItem("city");
				if(city!==''){
				$('#city').val(city);
				}

				let zip=localStorage.getItem("zip");
				if(zip!==''){
				$('#zip').val(zip);
				}

				


				let states=localStorage.getItem("state");
				if(states!==''){

					$("#state").val(states).change();


				}

				let cancer=localStorage.getItem("cancer");
				if(cancer!==''){
					if(cancer==1){
					$('#cancer').prop('checked', true);
					$("label[for='cancer']").addClass("active");
					}
				}
				var diabetes=localStorage.getItem("diabetes");
				if(diabetes!==''){
					if(diabetes==1){
					$('#diabetes').prop('checked', true);
					$("label[for='diabetes']").addClass("active");
					}
				}
				var heart=localStorage.getItem("heart");
				if(heart!==''){
					if(heart==1){
					$('#heart').prop('checked', true);
					$("label[for='heart']").addClass("active");
					}
				}
				var blood=localStorage.getItem("blood");
				if(blood!==''){
					if(blood==1){
					$('#blood').prop('checked', true);
					$("label[for='blood']").addClass("active");
					}
				}
				var chol=localStorage.getItem("chol");
				if(chol!==''){
					if(chol==1){
					$('#chol').prop('checked', true);
					$("label[for='chol']").addClass("active");
					}
				}
				var asthma=localStorage.getItem("asthma");
				if(asthma!==''){
					if(asthma==1){
					$('#asthma').prop('checked', true);
					$("label[for='asthma']").addClass("active");
					}
				}

			}

				for (var i = 0; i < localStorage.length; i++){
				console.log(localStorage.getItem(localStorage.key(i)));
				}
	


//END MOD	
			},
			loadquiz: function(){
				quiz.active = $('.page').data('page');
				quiz.header();	
			},
			cache: function() {
				this.$wrap = $('#medigapQuiz');
				this.$next = this.$wrap.find('.next');
				this.$back = this.$wrap.find('.back');
				this.$header = this.$wrap.find('.header');
				this.$number = this.$wrap.find('.number');
				this.$bar = this.$wrap.find('#bar');
				this.$footerLinks = this.$wrap.find('.footerLinks');
				this.$popupCont = this.$wrap.find('#popupCont');
				this.$formCheck = this.$wrap.find('.checkJS');
				this.$multiSel = this.$wrap.find('.multiSel');
			},
			bind: function() {
				this.$next.click(this.next.bind(this));
				this.$back.click(this.back.bind(this));
				this.$footerLinks.click(this.footerPopup.bind(this));
				this.$formCheck.click(this.colorActive.bind(this));
				this.$multiSel.click(this.multiSel.bind(this));
			},
			footerPopup: function(e) {
				e.preventDefault();
				quiz.popupTarget = $(e.target).data('id');
				quiz.showPopup();
			},
			showPopup: function() {
				this.$popupCont.html(popup[quiz.popupTarget]);
				this.$popupCont.after(popup.bg);
				this.popupBind();
			},
			popupBind: function() {
				$('.close').click(this.removePopup.bind(this));
				$('.popup-bg').click(this.removePopup.bind(this));
			},
			removePopup: function(e) {
				e.preventDefault();
				quiz.$popupCont.html('');
				$('.popup-bg').remove();
			},
			colorActive: function() {
				this.$formCheck.each(function() {
					if (
						$(this)
							.find('input')
							.is(':checked')
					) {
						$(this)
							.siblings()
							.removeClass('active');
						$(this).addClass('active');
					}
				});
			},
			multiSel: function(e) {
				quiz.$multiSel.each(function() {
					if (
						$(this)
							.find('input')
							.is(':checked')
					) {
						$(this).addClass('active');
					} else {
						$(this).removeClass('active');
					}
				});
			},
			header: function() {
				//console.log('load header');
				if (this.active != 1) {
					this.$header.addClass('hidden');
				} else {
					this.$header.removeClass('hidden');
				}
				quiz.prog();
			},
			prog: function() {
				$('#prog-' + this.active).addClass('active');
				quiz.changeBar();
			},
			changeBar: function() {
				switch (this.active) {
					case 1:
						quiz.$bar.css('width', '5%');
						break;
					case 2:
						quiz.$bar.css('width', '33%');
						break;
					case 3:
						quiz.$bar.css('width', '66%');
						break;
					case 4:
						quiz.$bar.css('width', '100%');
						quiz.end();
						break;
				}
			},
			next: function(e) {
				e.preventDefault();
				quiz.$el = $(e.target);
				quiz.active = quiz.$el.closest('.page').data('page');
				quiz.sendGa('next', 'On Page: ' + quiz.active);
				console.log(quiz.active);

				
				if(quiz.active==1){
					quiz.data.gender = quiz.radioVal('.gender');
					quiz.data.enrolled = quiz.radioVal('.enrolled');
					quiz.data.over65 = parseInt(quiz.radioVal('.age'));

					localStorage.setItem("age_over65",quiz.data.over65);
					localStorage.setItem("gender",quiz.data.gender);
					localStorage.setItem("enrolled",quiz.data.enrolled);

					window.location.href = "contact-information.php";

				}
				if(quiz.active==2){
					//console.log('valid:'+quiz.ValidStep2.bind(this));



					if(quiz.ValidStep2('form')==true){
					

					localStorage.setItem("firstname",$('#first').val());
					localStorage.setItem("lastname",$('#last').val());
					localStorage.setItem("email",$('#email').val());
					localStorage.setItem("phone",$('#phone').val());
					localStorage.setItem("age",$('#age').val());

					localStorage.setItem("address",$('#address').val());
					localStorage.setItem("city",$('#city').val());
					localStorage.setItem("zip",$('#zip').val());
					localStorage.setItem("state",$('#state').val());



					window.location.href = "health-questions.php";
					}
				}

				if(quiz.active==3){

				quiz.data.tobacco = quiz.radioVal('.tobacco');
				quiz.data.cancer = $('#cancer').is(':checked') ? 1 : 0;
				quiz.data.diabetes = $('#diabetes').is(':checked') ? 1 : 0;
				quiz.data.heart = $('#heart').is(':checked') ? 1 : 0;
				quiz.data.blood = $('#blood').is(':checked') ? 1 : 0;
				quiz.data.chol = $('#chol').is(':checked') ? 1 : 0;
				quiz.data.asthma = $('#asthma').is(':checked') ? 1 : 0;


				localStorage.setItem("tobacco",quiz.data.tobacco);
				localStorage.setItem("cancer",quiz.data.cancer);
				localStorage.setItem("diabetes",quiz.data.diabetes);
				localStorage.setItem("heart",quiz.data.heart);
				localStorage.setItem("blood",quiz.data.blood);
				localStorage.setItem("chol",quiz.data.chol);
				localStorage.setItem("asthma",quiz.data.asthma);




					window.location.href = "medicare-plans.php";
				}

				/*
				if(quiz.active==4){
					console.log('last page');
					window.location.href = "step5.php?gender="+quiz.data.gender+"&age="+quiz.data.over65;
				}
				*/

				/*
				$('#page-' + quiz.active).addClass('hidden');
				quiz.active = parseInt(quiz.active) + 1;
				$('#page-' + quiz.active).removeClass('hidden');
				quiz.header();
				*/
			},
			back: function(e) {
				e.preventDefault();
				quiz.$el = $(e.target);
				quiz.active = quiz.$el.closest('.page').data('page');
				quiz.sendGa('back', 'On Page: ' + quiz.active);

				/*
				$('#page-' + quiz.active).addClass('hidden');
				quiz.active = parseInt(quiz.active) - 1;
				$('#page-' + quiz.active).removeClass('hidden');
				quiz.header();
				$('.active')
					.last()
					.removeClass('active');
					*/

					if(quiz.active==2){
						window.location.href = "index.php";
	
					}
					if(quiz.active==3){
						window.location.href = "health-questions.php";
					}
	
					if(quiz.active==4){
						window.location.href = "medicare-plans.php";
					}

					
					
			},
			sendGaClick: function() {
				this.sendGa('billing', 'clicked link');
				window.dataLayer = window.dataLayer || [];
				window.dataLayer.push({
					event: 'linkClicked',
					plan: 'Listing Was Clicked'
				});
			},
			bindLeadPopup: function() {
				$('#leadSubmit').click(quiz.verifyData.bind(this));
			},
			ValidStep2: function(e) {
				//e.preventDefault();
				this.errors = 0;
				$('#email').removeClass('error');
				$('#phone').removeClass('error');
				$('#first').removeClass('error');
				$('#last').removeClass('error');
				$('#address').removeClass('error');
				$('#zip').removeClass('error');
				$('#city').removeClass('error');
				$('#state').removeClass('error');
				$('#age').removeClass('error');

				if (!quiz.isEmail($('#email').val())) {
					$('#email').addClass('error');
					$('#mail_error').removeClass('hidden');
					this.errors++;
				}
				else{
					$('#mail_error').addClass('hidden');
				}
				if ($('#phone').val().length < 14) {
					$('#phone').addClass('error');
					$('#phone_error').removeClass('hidden');
					this.errors++;
				}
				else{
					$('#phone_error').addClass('hidden');
				}
				if ($('#first').val().length === 0) {
					$('#first').addClass('error');
					this.errors++;
				}
				if ($('#last').val().length === 0) {
					$('#last').addClass('error');
					this.errors++;
				}
				if (!quiz.isAge($('#age').val())) {
					$('#age').addClass('error');
					$('#age_error').removeClass('hidden');
					this.errors++;
				}
				else{
					$('#age_error').addClass('hidden');
				}
				if ($('#address').val().length === 0) {
					$('#address').addClass('error');
					this.errors++;
				}
				if ($('#city').val().length === 0) {
					$('#city').addClass('error');
					this.errors++;
				}
				if ($('#zip').val().length === 0) {
					$('#zip').addClass('error');
					this.errors++;
				}
				
				if ($('#state option:selected').val() == 'Select a State') {
					$('#state').addClass('error');
					this.errors++;
				}
				
				if (this.errors > 0) {
					return false;
				}
				else{
					return true;
				}
			},
			verifyData: function(e) {
				e.preventDefault();
				this.errors = 0;
				$('#email').removeClass('error');
				$('#phone').removeClass('error');
				$('#first').removeClass('error');
				$('#last').removeClass('error');
				$('#address').removeClass('error');
				$('#city').removeClass('error');
				$('#zipcode_02').removeClass('error');

				if (!quiz.isEmail($('#email').val())) {
					$('#email').addClass('error');
					this.errors++;
				}
				if ($('#phone').val().length < 12) {
					$('#phone').addClass('error');
					this.errors++;
				}
				if ($('#first').val().length === 0) {
					$('#first').addClass('error');
					this.errors++;
				}
				if ($('#last').val().length === 0) {
					$('#last').addClass('error');
					this.errors++;
				}
				if ($('#address').val().length === 0) {
					$('#address').addClass('error');
					this.errors++;
				}
				if ($('#city').val().length === 0) {
					$('#city').addClass('error');
					this.errors++;
				}
				if ($('#zipcode_02').val().length === 0) {
					$('#zipcode_02').addClass('error');
					this.errors++;
				}
				if (this.errors > 0) {
					return false;
				}
				quiz.postLead();
			},
			isEmail: function(email) {
				var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return re.test(String(email).toLowerCase());
			},
			isAge: function(age) {
				if(age>=18 && age<=110){
					return true;
				}
				else { return false; }
			},
			postLead: function() {
				var type = 'insurance';
				if (quiz.data.over65 === 1) {
					type = 'medicare';
				}
/*
				var submit = {};
				submit.type = type;
				submit.version = 18;
				submit.local_hour = new Date().getHours();
				submit.date_time = quiz.js_yyyy_mm_dd_hh_mm_ss();
				submit.yy_mm_dd = quiz.yyy_mm_dd();
				submit.ip = quiz.data.ip;
				submit.ua = navigator.userAgent;
				submit.url = window.location.href;
				submit.data = quiz.data;
				submit.leadid_token = $('#leadid_token').val();
				submit.email = $('#email').val();
				submit.first = $('#first').val();
				submit.last = $('#last').val();
				submit.phone = $('#phone').val();
				submit.address = $('#address').val();
				submit.county = $('#city').val();
				submit.zip = $('#zipcode_02').val();
				//console.log(submit);
*/
//MOD BY JC Here you define the parameters to get de Medicare JSON List
var submit = {};
				submit.type = type;
				submit.version = 18;
				submit.local_hour = new Date().getHours();
				submit.date_time = quiz.js_yyyy_mm_dd_hh_mm_ss();
				submit.yy_mm_dd = quiz.yyy_mm_dd();
				submit.ip = quiz.data.ip;
				submit.ua = navigator.userAgent;
				submit.url = window.location.href;
				submit.data = quiz.data;
				submit.leadid_token = $('#leadid_token').val();
				submit.email = localStorage.getItem("email");
				submit.first = localStorage.getItem("firstname");
				submit.last = localStorage.getItem("lastname");
				submit.phone = localStorage.getItem("phone");
				submit.address = localStorage.getItem("address");
				submit.county = localStorage.getItem("city");
				submit.zip = localStorage.getItem("zip");


				
				//console.log(submit);
//END MOD

				


			},
			js_yyyy_mm_dd_hh_mm_ss: function() {
				var now = new Date();
				var year = '' + now.getFullYear();
				var month = '' + (now.getMonth() + 1);
				if (month.length == 1) {
					month = '0' + month;
				}
				var day = '' + now.getDate();
				if (day.length == 1) {
					day = '0' + day;
				}
				var hour = '' + now.getHours();
				if (hour.length == 1) {
					hour = '0' + hour;
				}
				var minute = '' + now.getMinutes();
				if (minute.length == 1) {
					minute = '0' + minute;
				}
				var second = '' + now.getSeconds();
				if (second.length == 1) {
					second = '0' + second;
				}
				return year + '-' + month + '-' + day + ' ' + hour + ':' + minute + ':' + second;
			},
			yyy_mm_dd: function() {
				var now = new Date();
				now.setDate(now.getDate() - 7);

				var year = '' + now.getFullYear();
				var month = '' + (now.getMonth() + 1);
				if (month.length == 1) {
					month = '0' + month;
				}
				var day = '' + now.getDate();
				if (day.length == 1) {
					day = '0' + day;
				}
				return year + '-' + month + '-' + day;
			},
			sendGa: function(cat, action) {
				ga('gtag_UA_99115985_6.send', 'event', cat, action);
			},
			radioVal: function(el) {
				var bool;
				$(el)
					.find('input')
					.each(function() {
						if ($(this).is(':checked')) {
							bool = $(this).val();
						}
					});
				return bool;
			},
			makeBDay: function() {
				if (quiz.data.over65 === 1) {
					quiz.data.dob = '1952-05-12';
				} else {
					quiz.data.dob = '1963-03-02';
				}
			},
			end: function() {

				quiz.data.tobacco = localStorage.getItem("tobacco");
				quiz.data.gender = localStorage.getItem("gender");
				quiz.data.over65 = localStorage.getItem("over65");
				quiz.makeBDay();
				quiz.data.currently_insured = localStorage.getItem("enrolled");
				quiz.data.cancer = localStorage.getItem("over65");
				quiz.data.diabetes = localStorage.getItem("diabetes");
				quiz.data.heart = localStorage.getItem("heart");
				quiz.data.blood = localStorage.getItem("blood");
				quiz.data.chol = localStorage.getItem("chol");
				quiz.data.asthma = localStorage.getItem("asthma");
				/*
				if (quiz.mode == 'lead') {
					this.$popupCont.html(popup.lead);
					this.$popupCont.after(popup.bg);
					$('#zipcode_02').val(quiz.storedZip);
					$('#city').val(quiz.storedCity);
					//Inputmask({ mask: '(999) 999-9999'}).mask('#phone');
					this.popupBind();
					this.bindLeadPopup();
				}
				*/

//MOD BY JC
/*				
				quiz.data.tobacco = quiz.radioVal('.tobacco');
				quiz.data.gender = quiz.radioVal('.gender');
				quiz.data.over65 = parseInt(quiz.radioVal('.age'));
				quiz.makeBDay();
				quiz.data.currently_insured = quiz.radioVal('.enrolled');
				quiz.data.cancer = $('#cancer').is(':checked') ? 1 : 0;
				quiz.data.diabetes = $('#diabetes').is(':checked') ? 1 : 0;
				quiz.data.heart = $('#heart').is(':checked') ? 1 : 0;
				quiz.data.blood = $('#blood').is(':checked') ? 1 : 0;
				quiz.data.chol = $('#chol').is(':checked') ? 1 : 0;
				quiz.data.asthma = $('#asthma').is(':checked') ? 1 : 0;
				//console.log(quiz.data);
				if (quiz.mode == 'lead') {
					this.$popupCont.html(popup.lead);
					this.$popupCont.after(popup.bg);
					$('#zipcode_02').val(quiz.storedZip);
					$('#city').val(quiz.storedCity);
					Inputmask({
						mask: '(999) 999-9999'
					}).mask('#phone');
					this.popupBind();
					this.bindLeadPopup();
				}

*/
quiz.postLead();
				quiz.displayListings();
			},
			displayListings: function() {
				if (quiz.data.over65 == 1) {
					window.MediaAlphaExchange = {
						type: 'ad_unit',
						placement_id: 'LwJKqWgxPxgZ_SSb6-NGRYeyaK-3LA',
						version: '17',
						ua_class: navigator.userAgent,
						sub_id: quiz.cta,
						data: {
							zip: $('#zipcode').val(),
							coverage_type: 'Medicare Advantage',
							tobaco: quiz.data.tobaco,
							gender: quiz.data.gender,
							birth_date: quiz.data.dob,
							currently_insured: quiz.data.currently_insured,
							major_condition_cancer: quiz.data.cancer,
							major_condition_diabetes: quiz.data.diabetes,
							major_condition_heart_disease: quiz.data.heart,
							major_condition_high_blood_pressure: quiz.data.blood,
							major_condition_high_cholesterol: quiz.data.chol,
							major_condition_asthma: quiz.data.asthma
						}
					};
				} else {
				//	console.log('insurance');
					window.MediaAlphaExchange = {
						type: 'ad_unit',
						placement_id: 'MqGzSY_ut54JLXJbYnRWPqrufzFqzQ',
						version: '17',
						ua_class: navigator.userAgent,
						sub_id: quiz.cta,
						data: {
							zip: quiz.zip,
							coverage_type: 'Individual Family',
							primary: {
								birth_date: quiz.data.dob,
								tobaco: quiz.data.tobaco,
								gender: quiz.data.gender
							},
							currently_insured: quiz.data.currently_insured,
							major_condition_cancer: quiz.data.cancer,
							major_condition_diabetes: quiz.data.diabetes,
							major_condition_heart_disease: quiz.data.heart,
							major_condition_high_blood_pressure: quiz.data.blood,
							major_condition_high_cholesterol: quiz.data.chol,
							major_condition_asthma: quiz.data.asthma
						}
					};
				}


				/* Load Medicare Lsting */
				MediaAlphaExchange__load('plans');
				setTimeout(() => {
					quiz.doStars();
					quiz.countListings();
					quiz.$wrap.find('table.max-ad-listings tbody tr.listing').on('click', quiz.sendGaClick.bind(this));
				}, 400);
			},
			countListings: function() {
				this.numListings = $('#max-partners > table > tbody > tr.listing').length;
				if (parseInt(this.numListings) > 0 && typeof this.numListings != 'undefined') {
					$('#plansFound').text(this.numListings);
				}
			},
			doStars: function() {
				$('.max-ad-listings tbody').before('<thead id="ma-table-header"><tr><th>Rating</th><th>Company</th><th>Features</th><th>Visit Site</th></tr></thead>');
				$('.max-ad-number').text(' ');
				$('.help-clicker').remove();

				$('.max-ad-number:eq(0)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>');

				$('.max-ad-number:eq(1)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i>');
				$('.max-ad-number:eq(2)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i>');

				$('.max-ad-number:eq(3)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>');
				$('.max-ad-number:eq(4)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>');

				$('.max-ad-number:eq(5)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i>');
				$('.max-ad-number:eq(6)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i>');

				$('.max-ad-number:eq(7)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>');
				$('.max-ad-number:eq(8)').html('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>');

				$('.max-ad-button img').remove();
				$('.max-ad-button').html('<a href="#" class="btn btn-primary">' + this.cta + '</a>');
			}
		};

		const popup = {
			bg: function() {
				return '<div class="popup-bg"></div>';
			},
			lead: `
			<div id="popup-v2" class="popup show p-3">
				<div class="close pr-2">
					<i class="fas fa-times"></i>
				</div>
				<div class="my-3 mx-3 text-center">
					<div class="h1 mb-3">Further Customize Your Results!</div>
					<form>
						<div class="row">
							<div class="col-12 col-md-6">
								<label for="first" class="sr-only">First Name</label>
								<input type="text" class="form-control" id="first" placeholder="First Name">
							</div>
							<div class="col-12 col-md-6">
								<label for="last" class="sr-only">Last Name</label>
								<input type="text" class="form-control" id="last" placeholder="Last Name">
							</div>
							<div class="col-12">
								<label for="address" class="sr-only">Address</label>
								<input type="text" class="form-control" id="address" placeholder="Address">
							</div>
							<div class="col-12 col-md-6">
								<label for="city" class="sr-only">City</label>
								<input type="text" class="form-control" id="city" placeholder="City">
							</div>
							<div class="col-12 col-md-6">
								<label for="city" class="sr-only">Zip Code</label>
								<input type="text" class="form-control" id="zipcode_02" placeholder="Zip Code">
							</div>
							<div class="col-12">
								<label for="email" class="sr-only">Email</label>
								<input type="text" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="col-12 col-md-6">
								<label for="phone" class="sr-only">Phone</label>
								<input type="text" class="form-control" id="phone" placeholder="Phone">
							</div>
							
							<div class="col-12 my-3">
								<a href="#" id="leadSubmit" class="btn btn-primary">View Your Results</a>
							</div>
							<div class="col-12">
								<div class="small p-2">By clicking view my results, you represent that you are at least 18 and agree to our Privacy Policy and Terms
									of Use. You also authorize QuoteLab and/or its marketing partners to contact you for marketing/telemarketing
									purposes at the number and address provided above, including your wireless number, if provided, using live operators,
									automated telephone dialing systems, pre-recorded messages, text message or emails, or direct you to a licensed
									sales agent who can answer your questions and provide information about Medicare Advantage, Medicare Supplement
									and Prescription Drug plans or Life Insurance plans by phone or email. Agents are not connected with or endorsed
									by the U.S. government or the federal Medicare program. You are not required to consent as a condition of purchasing
									goods or services and may revoke consent at anytime.</div>
							</div>
		
						</div>
					</form>
		
				</div>
			</div>`,
			contact: `<div id="popup-contact" class="popup show p-3">
				<div class="close pr-2">
					<i class="fas fa-times"></i>
				</div>
				<div class="my-5 mx-3 text-center">
					<h2 class="mb-3">Interested in a partnership, sponsorship or advertising? </h2>
					<p>Feel free to email us at: info@mymedicareplans.org</p>
					<p>For medigap insurance quotes please call: (844) 707-8826</p>
				</div>
				</div>`,
			disclosure: `
				<div id="popup-disclosure" class="popup show p-3">
					<div class="close pr-2">
						<i class="fas fa-times"></i>
					</div>
					<div class="my-3 mb-5 mx-3 text-center">
						<h2 class="mb-3">Disclosure</h2>
						<p>MyMedicarePlans.org is an independent, advertising-supported publisher and comparison service. MyMedicarePlans.org is compensated
							in exchange for featured placement of sponsored products and services, or your clicking on links posted on this
							website. This compensation may impact how, where and in what order products appear. MyMedicarePlans.org does not include
							all companies or all available products. MyMedicarePlans.org is not affiliated with any United States Government entity
							or service.</p>
					</div>
				</div>`,
			privacy: `
				<div id="popup-privacy" class="popup show privacy p-3">
				<div class="close pr-2">
					<i class="fas fa-times"></i>
				</div>
				<div class="my-3 mb-5 mx-3 text-center">
					<h2 class="mb-3">Privacy Policy</h2>
					<p>
						This page informs you of our policies regarding the collection, use and disclosure of Personal Information when you use our
						Service. We will not use or share your information with anyone except as described in this Privacy Policy. This
						Privacy Policy is licensed by [TermsFeed Generator](https://termsfeed.com) to MyMedicarePlans.org. We use your Personal
						Information for providing and improving the Service. By using the Service, you agree to the collection and use of
						information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this
						Privacy Policy have the same meanings as in our Terms and Conditions, accessible at mymedicareplans.org Information
						Collection And Use While using our Service, we may ask you to provide us with certain personally identifiable information
						that can be used to contact or identify you. Log Data We collect information that your browser sends whenever you
						visit our Service (“Log Data”). This Log Data may include information such as your computer’s Internet Protocol
						(“IP”) address, browser type, browser version, the pages of our Service that you visit, the time and date of your
						visit, the time spent on those pages and other statistics. Cookies Cookies are files with small amount of data,
						which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on
						your computer’s hard drive. We use “cookies” to collect information. You can instruct your browser to refuse all
						cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to
						use some portions of our Service. Service Providers We may employ third party companies and individuals to facilitate
						our Service, to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing
						how our Service is used. These third parties have access to your Personal Information only to perform these tasks
						on our behalf and are obligated not to disclose or use it for any other purpose. Security The security of your Personal
						Information is important to us, but remember that no method of transmission over the Internet, or method of electronic
						storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information,
						we cannot guarantee its absolute security. Links To Other Sites Our Service may contain links to other sites that
						are not operated by us. If you click on a third party link, you will be directed to that third party’s site. We
						strongly advise you to review the Privacy Policy of every site you visit. We have no control over, and assume no
						responsibility for the content, privacy policies or practices of any third party sites or services. Children’s Privacy
						Our Service does not address anyone under the age of 13 (“Children”). We do not knowingly collect personally identifiable
						information from children under 13. If you are a parent or guardian and you are aware that your Children has provided
						us with Personal Information, please contact us. If we discover that a Children under 13 has provided us with Personal
						Information, we will delete such information from our servers immediately. Changes To This Privacy Policy We may
						update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy
						on this page. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy
						Policy are effective when they are posted on this page. Contact Us If you have any questions about this Privacy
						Policy, please contact us.
					</p>
				</div>
			</div>`
		};

		quiz.init();
	});
})(jQuery);
