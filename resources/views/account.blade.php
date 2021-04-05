@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('content')

<div class="container">
    <div class="row">
       <div class="col-md-12">
          <div id="content" class="content content-full-width">
             <!-- begin profile -->
             <div class="profile">
                <div class="profile-header">
                   <!-- BEGIN profile-header-cover -->
                   <div class="profile-header-cover"></div>
                   <!-- END profile-header-cover -->
                   <!-- BEGIN profile-header-content -->
                   <div class="profile-header-content">
                      <!-- BEGIN profile-header-img -->
                      <div class="profile-header-img">
                         <img src="{{$user->profile_image}}" alt="">
                      </div>
                      <!-- END profile-header-img -->
                      <!-- BEGIN profile-header-info -->
                      <div class="profile-header-info">
                         <h4 class="m-t-10 m-b-5">{{$user->first_name}} {{$user->last_name}}</h4>
                         <p class="m-b-10">UXUI + Frontend Developer</p>
                         <a href="#" class="btn btn-sm btn-info mb-2">Edit Profile</a>
                      </div>
                      <!-- END profile-header-info -->
                   </div>
                   <!-- END profile-header-content -->
                   <!-- BEGIN profile-header-tab -->
                   <ul class="profile-header-tab nav nav-tabs">
                      <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTS</a></li>
                      <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
                      <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                      <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                      <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                   </ul>
                   <!-- END profile-header-tab -->
                </div>
             </div>
             <!-- end profile -->
             <!-- begin profile-content -->
             <div class="profile-content">
                <!-- begin tab-content -->
                <div class="tab-content p-0">
                   <!-- begin #profile-post tab -->
                   <div class="tab-pane fade active show" id="profile-post">
                      <!-- begin timeline -->
                      <ul class="timeline">
                         <li>
                            <div class="timeline-body">
                                   <div class=" border-bottom  ">
                                     <p class="font-weight-bold">Post Someething</p>
                                   </div>
                                   <div class="p-2 mt-2">
                                     <img class="rounded-circle d-inline" src="https://picsum.photos/36/36">
                                     <button class="write" id="post" >
                                      <span class="text-secondary"> What's on your mind?</span>
                                     </button>
                                   </div>
                                   
                            </div>
                         </li>
                         <li>
                            <!-- begin timeline-time -->
                            <div class="timeline-time">
                               <span class="date">today</span>
                               <span class="time">04:20</span>
                            </div>
                            <!-- end timeline-time -->
                            <!-- begin timeline-icon -->
                            <div class="timeline-icon">
                               <a href="javascript:;">&nbsp;</a>
                            </div>
                            <!-- end timeline-icon -->
                            <!-- begin timeline-body -->
                            <div class="timeline-body">
                               <div class="timeline-header">
                                  <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                  <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                  <span class="pull-right text-muted">18 Views</span>
                               </div>
                               <div class="timeline-content">
                                  <p>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                     Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                  </p>
                               </div>
                               <div class="timeline-likes">
                                  <div class="stats-right">
                                     <span class="stats-text">259 Shares</span>
                                     <span class="stats-text">21 Comments</span>
                                  </div>
                                  <div class="stats">
                                     <span class="fa-stack fa-fw stats-icon">
                                     <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                     <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                     </span>
                                     <span class="fa-stack fa-fw stats-icon">
                                     <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                     <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                     </span>
                                     <span class="stats-total">4.3k</span>
                                  </div>
                               </div>
                               <div class="timeline-footer">
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                               </div>
                               <div class="timeline-comment-box">
                                  <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                  <div class="input">
                                     <form action="">
                                        <div class="input-group">
                                           <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                           <span class="input-group-btn p-l-10">
                                           <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                           </span>
                                        </div>
                                     </form>
                                  </div>
                               </div>
                            </div>
                            <!-- end timeline-body -->
                         </li>
                         <li>
                            <!-- begin timeline-time -->
                            <div class="timeline-time">
                               <span class="date">yesterday</span>
                               <span class="time">20:17</span>
                            </div>
                            <!-- end timeline-time -->
                            <!-- begin timeline-icon -->
                            <div class="timeline-icon">
                               <a href="javascript:;">&nbsp;</a>
                            </div>
                            <!-- end timeline-icon -->
                            <!-- begin timeline-body -->
                            <div class="timeline-body">
                               <div class="timeline-header">
                                  <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                  <span class="username">Sean Ngu</span>
                                  <span class="pull-right text-muted">82 Views</span>
                               </div>
                               <div class="timeline-content">
                                  <p>Location: United States</p>
                               </div>
                               <div class="timeline-footer">
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                               </div>
                            </div>
                            <!-- end timeline-body -->
                         </li>
                         <li>
                            <!-- begin timeline-time -->
                            <div class="timeline-time">
                               <span class="date">24 February 2014</span>
                               <span class="time">08:17</span>
                            </div>
                            <!-- end timeline-time -->
                            <!-- begin timeline-icon -->
                            <div class="timeline-icon">
                               <a href="javascript:;">&nbsp;</a>
                            </div>
                            <!-- end timeline-icon -->
                            <!-- begin timeline-body -->
                            <div class="timeline-body">
                               <div class="timeline-header">
                                  <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                  <span class="username">Sean Ngu</span>
                                  <span class="pull-right text-muted">1,282 Views</span>
                               </div>
                               <div class="timeline-content">
                                  <p class="lead">
                                     <i class="fa fa-quote-left fa-fw pull-left"></i>
                                     Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
                                     <i class="fa fa-quote-right fa-fw pull-right"></i>
                                  </p>
                               </div>
                               <div class="timeline-footer">
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                               </div>
                            </div>
                            <!-- end timeline-body -->
                         </li>
                         <li>
                            <!-- begin timeline-time -->
                            <div class="timeline-time">
                               <span class="date">10 January 2014</span>
                               <span class="time">20:43</span>
                            </div>
                            <!-- end timeline-time -->
                            <!-- begin timeline-icon -->
                            <div class="timeline-icon">
                               <a href="javascript:;">&nbsp;</a>
                            </div>
                            <!-- end timeline-icon -->
                            <!-- begin timeline-body -->
                            <div class="timeline-body">
                               <div class="timeline-header">
                                  <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                  <span class="username">Sean Ngu</span>
                                  <span class="pull-right text-muted">1,021,282 Views</span>
                               </div>
                               <div class="timeline-content">
                                  <h4 class="template-title">
                                     <i class="fa fa-map-marker text-danger fa-fw"></i>
                                     795 Folsom Ave, Suite 600 San Francisco, CA 94107
                                  </h4>
                                  <p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
                                  <p class="m-t-20">
                                     <img src="../assets/img/gallery/gallery-5.jpg" alt="">
                                  </p>
                               </div>
                               <div class="timeline-footer">
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                  <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                               </div>
                            </div>
                            <!-- end timeline-body -->
                         </li>
                         <li>
                            <!-- begin timeline-icon -->
                            <div class="timeline-icon">
                               <a href="javascript:;">&nbsp;</a>
                            </div>
                            <!-- end timeline-icon -->
                            <!-- begin timeline-body -->
                            <div class="timeline-body">
                               Loading...
                            </div>
                            <!-- begin timeline-body -->
                         </li>
                      </ul>
                      <!-- end timeline -->
                   </div>
                   <!-- end #profile-post tab -->
                   <!-- start #profile-about tab -->
                   <section class="section about-section gray-bg tab-pane fade" id="profile-about">
                    <div class="container">
                        <div class="row align-items-center ">
                            <div class="col-lg-6">
                                <div class="about-text go-to">
                                    <h3 class="dark-color">About Me</h3>
                                    <h6 class="theme-color lead">{{$user->profession}}</h6>
                                    <p>{{$user->about}}</p>
                                    <div class="row about-list">
                                        <div class="col-md-6">
                                            <div class="media">
                                                <label>Birthday</label>
                                                <p>{{$user->address}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Age</label>
                                                <p>22 Yr</p>
                                            </div>
                                            <div class="media">
                                                <label>Address</label>
                                                <p>{{$user->address}}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="media">
                                                <label>E-mail</label>
                                                <p>{{$user->email}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Phone</label>
                                                <p>{{$user->phone}}</p>
                                            </div>
                                            <div class="media">
                                                <label>Facebook</label>
                                                <p></p>
                                            </div>
                                            <div class="media">
                                                <label>Freelance</label>
                                                <p>Available</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>  
                 <!-- end About-content-->
                  <!-- begin #profile-friends tab -->
                  <div class="tab-pane fade in active " id="profile-friends">
                    <h4 class="m-t-0 m-b-20">Friend List (14)</h4>
                    <!-- begin row -->
                    <div class="row row-space-2">
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">James Pittman</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                      <ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, 34px, 0px);">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Mitchell Ashcroft</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Ella Cabena</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"></a>
                                      <ul class="dropdown-menu dropdown-menu-right" x-placement="top-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(101px, -2px, 0px);">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Declan Dyson</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">George Seyler</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Patrick Musgrove</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Taj Connal</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Laura Pollock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Dakota Mannix</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Timothy Woolley</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Benjamin Congreve</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Mariam Maddock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Blake Gerrald</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <!-- end col-6 -->
                       <!-- begin col-6 -->
                       <div class="col-md-6 m-b-2">
                          <div class="p-10 bg-white">
                             <div class="media media-xs overflow-visible">
                                <a class="media-left" href="javascript:;">
                                <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                   <b class="text-inverse">Gabrielle Bunton</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                   <div class="btn-group dropdown">
                                      <a href="javascript:;" class="btn btn-default">Friends</a>
                                      <a href="javascript:;" data-toggle="dropdown" class="btn btn-default dropdown-toggle"></a>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                         <li><a href="javascript:;">Action 1</a></li>
                                         <li><a href="javascript:;">Action 2</a></li>
                                         <li><a href="javascript:;">Action 3</a></li>
                                         <li class="divider"></li>
                                         <li><a href="javascript:;">Action 4</a></li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- end col-6 -->
                    </div>
                    <!-- end row -->
                 </div>
                 <!-- end #profile-friends tab -->
                </div>
                <!-- end tab-content -->
             </div>
             <!-- end profile-content -->
          </div>
       </div>
    </div>
 </div>




 
{{-- <section class="row">
    <div class="col-md-6 col-md-offset-3">
        <img src="/storage/profile_images/{{$user->profile_image}}" alt="" class="rounded-circle img-responsive img-fluid" width="304" height="236">
    </div>
</section>
<section class="row">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Your Account</h3></header>
        <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}" id="first_name">
            </div>
            <div class="form-group">
                <label for="image" >Image (only .jpg)</label>
                <input type="file" name="image" class="form-control-file" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Save Account</button>
            <input type="hidden" value="{{ Session::token() }}" name="_token">
        </form>
    </div>
</section>
  --}}
@endsection

