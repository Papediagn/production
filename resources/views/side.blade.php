<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('images/logo/logoo.png')}}" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{asset('images/logo/logoo.png')}}" alt="#" /></div>
             <div class="user_info">
                <h6>John David</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>SOREVET 2</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>MENU</span></a>
             <ul class="collapse list-unstyled" id="dashboard">
               <li>
                  <a href="{{route('blocs.create')}}"> <span>Ajouter un bloc</span></a>
               </li>
               <li>
                  <a href="{{route('blocs.index')}}"> <span>Liste des blocs</span></a>
               </li>
               <li>
                  <a href="{{route('tranches.create')}}"> <span>Ajouter des tranches</span></a>
               </li>
               <li>
                  <a href="{{route('tranches.index')}}"> <span>Production</span></a>
               </li>
                <li>
                   <a href="{{route('operateurs.create')}}"> <span>Ajouter un opérateur</span></a>
                </li>
                <li>
                   <a href="{{route('operateurs.index')}}"> <span>Liste des opérqteurs</span></a>
                </li>
                <li>
                  <a href="{{route('machines.create')}}"> <span>Ajouter une machine</span></a>
               </li>
               <li>
                  <a href="{{route('machines.index')}}"> <span>Liste des machines</span></a>
               </li>
             </ul>
          </li>

       </ul>
    </div>
 </nav>
