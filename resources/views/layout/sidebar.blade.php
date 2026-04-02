 <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Livres</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('livre.liste')}}">Liste</a></li>
              <li><a href="{{route('livre.create')}}">Nouveau</a></li>
            </ul>
          </li>
      <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-user"></i>
              <span>Etudiants</span>
            </a>
              <ul class="sub">
              <li><a href="{{route('etudiant.index')}}">Liste</a></li>
              <li><a href="{{route('etudiant.create')}}">Nouveau</a></li>
            </ul>
          </li>
      <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Emprunts</span>
              </a>
            <ul class="sub">
              <li><a href="general.html">Liste</a></li>
              <li><a href="buttons.html">Nouveaux</a></li>
            </ul>
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
