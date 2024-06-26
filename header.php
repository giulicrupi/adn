<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <link rel="profile" href="https://gmpg.org/xfn/11" /> -->
	
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50"> 

<nav class="navbar navbar-expand-lg menu fixed-top">
  <div class="container ">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
      <svg width="137" height="37" viewBox="0 0 137 37" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="Camada_1" clip-path="url(#clip0_39_723)">
      <g id="Group">
      <path id="azulClaro" d="M40.6498 23.1662C38.1102 18.35 30.2373 4.23364 29.7995 3.45038C27.1634 -1.26776 20.7976 -1.00047 18.2758 3.35481C17.8356 4.11457 0 36.6216 0 36.6216L15.7065 36.6678C18.514 36.6759 18.2911 36.5762 24.5933 25.3191C27.8104 19.5715 36.0647 16.3793 40.6498 23.1654" />
      <path id="detalhe" d="M40.6498 23.1663C40.5066 22.9541 40.3594 22.7516 40.2089 22.558C35.553 16.582 27.7091 19.7523 24.5934 25.3193C24.4131 25.64 24.2393 25.9502 24.0703 26.254L29.0054 35.0723C29.7988 36.5513 30.4643 37.4374 32.9885 35.9811C36.8695 33.739 43.5652 28.4255 40.6498 23.1663Z" />
      </g>
      <g id="Group_2">
      <path id="azul" d="M101.884 9.14148C99.1311 6.66779 95.0369 5.46497 89.368 5.46497C87.0473 5.46497 83.9718 5.52409 82.3255 5.68528C80.5632 5.81812 79.324 6.98125 79.1317 8.62876V33.2466C79.1317 35.265 80.2888 36.5748 82.2941 36.753C83.1301 36.8469 87.3563 37 88.1594 37C92.0508 37 95.3596 36.4589 97.9933 35.3922C100.743 34.2777 102.836 32.5046 104.216 30.12C105.565 27.7889 106.249 24.7693 106.249 21.1462C106.249 15.7841 104.781 11.7448 101.885 9.14148M89.7711 29.3505C89.2328 29.3505 88.7098 29.3408 88.2165 29.323C88.103 29.3189 87.9888 29.3141 87.8737 29.3076V13.0019C88.0218 12.9857 88.173 12.9703 88.3267 12.9557C88.8715 12.9079 89.3704 12.8836 89.8089 12.8836C91.5374 12.8836 92.9834 13.1622 94.1083 13.7114C95.1552 14.2225 95.9245 15.0244 96.4612 16.1608C97.0357 17.379 97.3262 19.05 97.3262 21.126C97.3262 23.202 97.0406 24.8989 96.4765 26.1195C95.9543 27.2478 95.193 28.0384 94.1486 28.5357C93.0156 29.0751 91.543 29.3489 89.7711 29.3489" />
      <path id="azul" d="M128.538 21.6727L119.42 7.56276C118.577 6.16392 117.815 5.59532 116.543 5.47868L116.506 5.45276H109.783V36.7958H115.921C117.296 36.7958 118.257 35.8368 118.257 34.4453L118.246 20.5808L127.471 34.8786C128.214 36.0353 128.815 36.7513 130.764 36.7926L137 36.7958V5.45276H130.869C129.494 5.45276 128.534 6.41178 128.534 7.80252L128.538 21.6727Z" />
      <path id="azul" d="M44.5057 36.6655H51.2714C53.1681 36.6655 53.8512 36.1463 54.5915 34.1391L55.8283 30.1435H64.3418L65.5721 34.1391C66.3124 36.1463 66.9956 36.6655 68.893 36.6655H75.7537L66.2279 7.27118C65.8916 6.19067 64.9115 5.46411 63.7898 5.46411H56.3916C55.2699 5.46411 54.2898 6.18743 53.9534 7.2647L44.5065 36.6655H44.5057ZM57.4449 23.8345L60.0834 13.8167L62.7236 23.8345H57.4449Z" />
      </g>
      </g>
      <defs>
      <clipPath id="clip0_39_723">
      <rect width="137" height="37" fill="white"/>
      </clipPath>
      </defs>
      </svg>
    	
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo site_url(); ?>/produtos">Empreendimentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/vagas-adn/">#VagasADN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/contato/">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url(); ?>/institucional/">Institucional</a>
        </li>        
      </ul>

    </div>
	<div class="botoes">
    <div class="cliente">
      <a href="<?php the_field('link_da_area_do_cliente', 'option'); ?>" target="_blank">
      <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
        <path d="M15 12.5C17.7614 12.5 20 10.2614 20 7.5C20 4.73858 17.7614 2.5 15 2.5C12.2386 2.5 10 4.73858 10 7.5C10 10.2614 12.2386 12.5 15 12.5Z" stroke="#0071CE"/>
        <path d="M18.75 25.7689C17.6134 26.0774 16.342 26.25 15 26.25C10.1675 26.25 6.25 24.0114 6.25 21.25C6.25 18.4886 10.1675 16.25 15 16.25C19.8325 16.25 23.75 18.4886 23.75 21.25C23.75 21.6816 23.6542 22.1005 23.4744 22.5" stroke="#0071CE" stroke-linecap="round"/>
      </svg>        
      </div>
      <p>Área do cliente</p>        
      </a>
    </div>	
    <div class="whats" id="desk">
    	<div class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
				<g clip-path="url(#clip0_208_76)">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5673 18.3574C20.254 19.2443 19.0086 19.978 18.0154 20.1925C17.3355 20.3369 16.4489 20.4511 13.4615 19.2131C10.1062 17.823 5.447 12.8713 5.447 9.57607C5.447 7.89857 6.4142 5.94521 8.1055 5.94521C8.9193 5.94521 9.0987 5.96108 9.3665 6.60347C9.6798 7.3603 10.4442 9.22496 10.5352 9.41611C10.9109 10.2002 10.153 10.6593 9.60309 11.342C9.42759 11.5474 9.22871 11.7696 9.451 12.152C9.67201 12.5265 10.4364 13.7723 11.5596 14.7723C13.0104 16.0649 14.1869 16.4775 14.6081 16.6531C14.9214 16.7831 15.2958 16.7528 15.5246 16.5083C15.8145 16.195 16.1746 15.675 16.5412 15.1626C16.7999 14.7959 17.1288 14.7501 17.4733 14.8802C17.706 14.9608 20.6635 16.3343 20.7883 16.5541C20.8806 16.714 20.8806 17.4705 20.5673 18.3574ZM13.0026 0H12.9961C5.82919 0 0 5.83096 0 13C0 15.8427 0.916509 18.4799 2.47521 20.6191L0.855406 25.4497L5.85131 23.8532C7.90661 25.2134 10.3597 26 13.0026 26C20.1695 26 26 20.169 26 13C26 5.83096 20.1695 0 13.0026 0Z" fill="white"/>
				</g>
				<defs>
					<clipPath id="clip0_208_76">
						<rect width="26" height="26" fill="white"/>
					</clipPath>
				</defs>
			</svg>    		
    	</div>
    	<p><?php the_field('whatsapp', 'option'); ?></p>
    </div>		
	</div>	
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>   -->		
    <div class="btn-expand" id="mob">  
        <i class="fa-solid fa-bars"></i>
    </div>  				
  </div>
</nav>