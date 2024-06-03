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
    	<img src="<?php echo get_template_directory_uri(); ?>/svg/logo.svg" alt="" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Empreendimentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">#VagasADN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Institucional</a>
        </li>        
      </ul>

    </div>
	<div class="botoes">
    <div class="cliente">
    	<div class="icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
			  <path d="M15 12.5C17.7614 12.5 20 10.2614 20 7.5C20 4.73858 17.7614 2.5 15 2.5C12.2386 2.5 10 4.73858 10 7.5C10 10.2614 12.2386 12.5 15 12.5Z" stroke="#0071CE"/>
			  <path d="M18.75 25.7689C17.6134 26.0774 16.342 26.25 15 26.25C10.1675 26.25 6.25 24.0114 6.25 21.25C6.25 18.4886 10.1675 16.25 15 16.25C19.8325 16.25 23.75 18.4886 23.75 21.25C23.75 21.6816 23.6542 22.1005 23.4744 22.5" stroke="#0071CE" stroke-linecap="round"/>
			</svg>    		
    	</div>
    	<p>Área do cliente</p>
    </div>	
    <div class="whats">
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
    	<p>(11) 99999-9999</p>
    </div>		
	</div>							
  </div>
</nav>