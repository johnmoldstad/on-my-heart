

<section class="header" role="banner">
	<a href="#"><img src="assets/images/logo.svg" alt="" class="site-logo" /></a>
	<label for="nav-trigger" class="nav-trigger-button">Menu</label>
</section>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger" class="nav-overlay" title="Close Menu"></label>
<nav>
	<ul>
		<li><a href="#" data-ng-class="{active:$state.includes('root.home')}">Home</a></li>
		<li><a href="#/what-is-it" data-ng-class="{active:$state.includes('root.what-is-it')}">What is it?</a></li>
		<li><a href="#/how-does-it-work" data-ng-class="{active:$state.includes('root.what-is-it')}">How does it work?</a></li>
		<li><a href="#/how-do-i-get-it" data-ng-class="{active:$state.includes('root.what-is-it')}">How do I get it?</a></li>
		<li><a href="#/how-do-i-use-it" data-ng-class="{active:$state.includes('root.what-is-it')}">How do I use it?</a></li>
	</ul>
</nav>
