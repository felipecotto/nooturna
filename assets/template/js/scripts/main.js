$(document).ready(function(){
	var swiper = new Swiper('.swiper-container', {
	  spaceBetween: 30,
	  centeredSlides: true,
	  loop: true,
	  autoplay: {
	    delay: 9000,
	    disableOnInteraction: false,
	  },
	  pagination: {
	    el: '.swiper-pagination',
	    clickable: true,
	  },
	  navigation: {
	  	el: '.swiper-pagination',
	  	clickable: true,
	  },
	});

	$(".open-submenu").click(function(){
	    $(".sub-menu").toggleClass("active");
	});

	window.sr = ScrollReveal({ reset: true });
	sr.reveal('.foo', { duration: 1000, delay: 2 });
	sr.reveal('.bar', { duration: 1500, delay: 2 });
	sr.reveal('.valores-intro', { duration: 1100 });
	sr.reveal('.visao-intro', { duration: 1300 });
	sr.reveal('.missao-intro', { duration: 1500 });
	
	$('.header-home').scrollToFixed();

	$(".btn-menu-mobile").click(function(){
		console.log("Oi"); 
	    $("nav.menu ul").toggleClass("open");
	});

	$("#form_orcamento").submit(function(event){
	    event.preventDefault();
	        $.ajax({
	            type: "POST",
	            url: "mail.php", 
	            async: true,
	            data: {
	                name: $("#name").val(),
	                email: $("#email").val(),
	                phone: $("#phone").val(),

	                nome_empresa: $("#nome_empresa").val(),
	                endereco: $("#endereco").val(),
	                cidade: $("#cidade").val(),
	                estado: $("#estado").val(),
	                orcamento: $("#orcamento").val(),
	                mensagem: $("#mensagem").val(),
	                prioridade: $("input[name='prioridade']:checked").val(),
	            }, 
	        success: function(data) { 
	            swal("Mensagem Enviada", "Em Breve entraremos em contato", "success");
	            $('#form_orcamento')[0].reset();
	        }
	     });
	});

	$("#form_contato").submit(function(event){
	    event.preventDefault();
	        $.ajax({
	            type: "POST",
	            url: "mail-contact.php", 
	            async: true,
	            data: {
	                name: $("#name").val(),
	                email: $("#email").val(),
	                assunto: $("#assunto").val(),
	                mensagem: $("#mensagem").val(),
	               
	            }, 
	        success: function(data) { 
	            swal("Mensagem Enviada", "Em Breve entraremos em contato", "success");
	            $('#form_contato')[0].reset();
	        }
	     });
	});

	$("#form_trabalho").submit(function(event){
	    event.preventDefault();
	        $.ajax({
	            type: "POST",
	            url: "mail-trabalho.php", 
	            async: true,
	            data: {
	                name: $("#name").val(),
	                phone: $("#phone").val(),
	                email: $("#email").val(),
	                funcao: $("#funcao").val(),
	                mensagem: $("#mensagem").val(),
	               
	            }, 
	        success: function(data) { 
	            swal("Mensagem Enviada", "Em Breve entraremos em contato", "success");
	            $('#form_trabalho')[0].reset();
	        }
	     });
	});

});

