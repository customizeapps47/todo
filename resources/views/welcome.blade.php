@extends('shopify-app::layouts.default')

@section('content')
<div class="app-content content todo-application">
    <div class="content-overlay"></div>
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content todo-sidebar">
                    <div class="todo-app-menu">
                        <div class="add-task">
                            <button type="button" class="btn btn-primary btn-block waves-effect waves-float waves-light" data-toggle="modal" data-target="#new-task-modal">
                                Add Task
                            </button>
                        </div>
                        <div class="sidebar-menu-list ps">
                            <div class="list-group list-group-filters">
                                <a href="javascript:void(0)" id="my-task" class="list-group-item list-group-item-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail font-medium-3 mr-50"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <span class="align-middle"> My Task</span>
                                </a>
                                <a href="javascript:void(0)" id="important" class="list-group-item list-group-item-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-3 mr-50"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> <span class="align-middle">Important</span>
                                </a>
                                <a href="javascript:void(0)" id="completed" class="list-group-item list-group-item-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check font-medium-3 mr-50"><polyline points="20 6 9 17 4 12"></polyline></svg> <span class="align-middle">Completed</span>
                                </a>
                                <a href="javascript:void(0)" id="deleted" class="list-group-item list-group-item-action active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash font-medium-3 mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="align-middle">Deleted</span>
                                </a>
                            </div>
                            <!-- <div class="mt-3 px-2 d-flex justify-content-between">
                                <h6 class="section-label mb-1">Tags</h6>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus cursor-pointer"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            </div> -->
                            <!-- <div class="list-group list-group-labels">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-primary mr-1"></span>Team
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-success mr-1"></span>Low
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-warning mr-1"></span>Medium
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-danger mr-1"></span>High
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
                                    <span class="bullet bullet-sm bullet-info mr-1"></span>Update
                                </a>
                            </div> -->
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right" data-select2-id="11">
            <div class="content-wrapper" data-select2-id="10">
                <div class="content-header row">
                </div>
                <div class="content-body" data-select2-id="9">
                    <div class="body-content-overlay"></div>
                    <div class="todo-app-list">
                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu font-medium-5"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-muted"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                    </div>
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search task" aria-label="Search..." aria-describedby="todo-search">
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle hide-arrow mr-1" id="todoActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical font-medium-2 text-body"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoActions">
                                    <a class="dropdown-item sort-asc" href="javascript:void(0)">Sort A - Z</a>
                                    <a class="dropdown-item sort-desc" href="javascript:void(0)">Sort Z - A</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Assignee</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Due Date</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort Today</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort 1 Week</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Sort 1 Month</a>
                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->

                        <!-- Todo List starts -->
                        <div class="todo-task-list-wrapper list-group ps ps--active-y">
                            <ul class="todo-task-list media-list" id="todo-task-list">
                                <!-- <li class="todo-item completed" style="">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                </div>
                                                <span class="todo-title">Fix Responsiveness for new structure 💻</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-primary">Team</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 08</small>
                                            <div class="avatar">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-4.jpg" alt="user-avatar" height="32" width="32">
                                            </div>
                                        </div>
                                    </div>
                                </li> -->
                                @foreach($works as $work)
                                    <li class="todo-item completed">
                                        <div class="todo-title-wrapper">
                                            <div class="todo-title-area">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                <div class="title-wrapper">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck{{$loop->index}}">
                                                        <label class="custom-control-label" for="customCheck{{$loop->index}}"></label>
                                                    </div>
                                                    <span class="todo-title">{{$work->title}}</span>
                                                </div>
                                            </div>
                                            <div class="todo-des">
                                                <span>{{$work->des}}</span>
                                            </div>
                                            <div class="todo-item-action">
                                                <div class="badge-wrapper mr-1">
                                                    @if($work->status == 1)
                                                        <div class="badge badge-pill badge-light-success">Accomplished</div>
                                                    @elseif($work->status == 2)
                                                        <div class="badge badge-pill badge-light-danger">Deleted</div>
                                                    @else
                                                        <div class="badge badge-pill badge-light-primary">Processing</div>
                                                    @endif
                                                </div>
                                                <small class="text-nowrap text-muted mr-1">{{$work->due_date}}</small>
                                                <!-- <div class="avatar bg-light-warning">
                                                    <div class="avatar-content">MB</div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <li class="todo-item" style="">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                    <label class="custom-control-label" for="customCheck10"></label>
                                                </div>
                                                <span class="todo-title">Finish documentation and make it live</span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <div class="badge-wrapper mr-1">
                                                <div class="badge badge-pill badge-light-success">Low</div>
                                            </div>
                                            <small class="text-nowrap text-muted mr-1">Aug 28</small>
                                            <div class="avatar">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="user-avatar" height="32" width="32">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="todo-item completed" style="">
                                    <div class="todo-title-wrapper">
                                        <div class="todo-title-area">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical drag-icon"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            <div class="title-wrapper">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11" checked="">
                                                    <label class="custom-control-label" for="customCheck11"></label>
                                                </div>
                                                <span class="todo-title">Pick up Nats from her school and drop at dance class😁 </span>
                                            </div>
                                        </div>
                                        <div class="todo-item-action">
                                            <small class="text-nowrap text-muted mr-1">Aug 17</small>
                                            <div class="avatar bg-light-primary">
                                                <div class="avatar-content">PK</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 772px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 642px;"></div></div></div>
                        <!-- Todo List ends -->
                    </div>

                    <!-- Right Sidebar starts -->
                    <div class="modal modal-slide-in sidebar-todo-modal fade" id="new-task-modal" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog sidebar-lg">
                            <div class="modal-content p-0">
                                <form id="form-modal-todo" class="todo-modal needs-validation" novalidate="novalidate" onsubmit="return false">
                                @sessionToken
                                    <div class="modal-header align-items-center mb-1">
                                        <h5 class="modal-title">Add Task</h5>
                                        <div class="todo-item-action d-flex align-items-center justify-content-between ml-auto">
                                            <span class="todo-item-favorite cursor-pointer mr-75"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star font-medium-2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></span>
                                            <button type="button" class="close font-large-1 font-weight-normal py-0" data-dismiss="modal" aria-label="Close">
                                                ×
                                            </button>
                                        </div>
                                    </div>
                                    <div class="modal-body flex-grow-1 pb-sm-0 pb-3" data-select2-id="8">
                                        <div class="action-tags" data-select2-id="7">
                                            <div class="form-group">
                                                <label for="todoTitleAdd" class="form-label">Title</label>
                                                <input type="text" id="todoTitleAdd" name="todoTitleAdd" class="new-todo-item-title form-control" placeholder="Title">
                                            </div>
                                            <!-- <div class="form-group position-relative" data-select2-id="6">
                                                <label for="task-assigned" class="form-label d-block">Assignee</label>
                                                <div class="position-relative" data-select2-id="5"><select class="select2 form-control select2-hidden-accessible" id="task-assigned" name="task-assigned" data-select2-id="task-assigned" tabindex="-1" aria-hidden="true">
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-3.jpg" value="Phill Buffer" selected="" data-select2-id="2">
                                                        Phill Buffer
                                                    </option>
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-1.jpg" value="Chandler Bing" data-select2-id="12">
                                                        Chandler Bing
                                                    </option>
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-4.jpg" value="Ross Geller" data-select2-id="13">
                                                        Ross Geller
                                                    </option>
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-6.jpg" value="Monica Geller" data-select2-id="14">
                                                        Monica Geller
                                                    </option>
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-2.jpg" value="Joey Tribbiani" data-select2-id="15">
                                                        Joey Tribbiani
                                                    </option>
                                                    <option data-img="../../../app-assets/images/portrait/small/avatar-s-11.jpg" value="Rachel Green" data-select2-id="16">
                                                        Rachel Green
                                                    </option>
                                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-task-assigned-container"><span class="select2-selection__rendered" id="select2-task-assigned-container" role="textbox" aria-readonly="true" title="
                                                        Phill Buffer
                                                    "><div class="media align-items-center"><img class="d-block rounded-circle mr-50" src="../../../app-assets/images/portrait/small/avatar-s-3.jpg" height="26" width="26" alt="
                                                        Phill Buffer
                                                    "><div class="media-body"><p class="mb-0">
                                                        Phill Buffer
                                                    </p></div></div></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                            </div> -->
                                            <div class="form-group">
                                                <label for="task-due-date" class="form-label">Due Date</label>
                                                <input type="text" class="form-control task-due-date flatpickr-input" id="task-due-date" name="task_due_date" readonly="readonly">
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="task-tag" class="form-label d-block">Tag</label>
                                                <div class="position-relative"><select class="form-control task-tag select2-hidden-accessible" id="task-tag" name="task-tag" multiple="" data-select2-id="task-tag" tabindex="-1" aria-hidden="true">
                                                    <option value="Team">Team</option>
                                                    <option value="Low">Low</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="High">High</option>
                                                    <option value="Update">Update</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="Select tag" style="width: 0px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label">Description</label>
                                                <textarea id="task-desc" name="task_desc" rows="4" cols="50" class="border-bottom-0 ql-container ql-snow" data-placeholder="Write Your Description"></textarea>
                                                <!-- <div id="task-desc" class="border-bottom-0 ql-container ql-snow" data-placeholder="Write Your Description"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Write Your Description"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                                                <div class="d-flex justify-content-end desc-toolbar border-top-0 ql-toolbar ql-snow">
                                                    <span class="ql-formats mr-0">
                                                        <button class="ql-bold" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button>
                                                        <button class="ql-italic" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button>
                                                        <button class="ql-underline" type="button"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button>
                                                        <button class="ql-align" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></button>
                                                        <button class="ql-link" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button>
                                                    </span>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="form-group my-1">
                                            <button id="btn-add" type="submit" class="btn btn-primary add-todo-item mr-1 waves-effect waves-float waves-light">Add</button>
                                            <button id="btn-cancel" type="button" class="btn btn-outline-secondary add-todo-item waves-effect" data-dismiss="modal">
                                                Cancel
                                            </button>
                                            <button id="btn-update"  type="button" class="btn btn-primary d-none update-btn update-todo-item mr-1 waves-effect waves-float waves-light">Update</button>
                                            <button id="btn-delete"  type="button" class="btn btn-outline-danger update-btn d-none waves-effect" data-dismiss="modal">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Right Sidebar ends -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>

    <script>

        $(document).ready(function(){
            $("#my-task").click(function(){
                console.log('mytask');
            });
            $("#important").click(function(){
                console.log('important');
            });
            $("#completed").click(function(){
                console.log('completed');
            });
            $("#deleted").click(function(){
                console.log('deleted');
            });
            $("#btn-add").click(function(){
                console.log('btn-add');
                let serializedData = $('#form-modal-todo').serialize();

                $.ajax({
                    url: "{{route('work.store')}}",
                    type: "POST",
                    data: serializedData,
                    success: function(){
                        alert('success');
                    },
                    error: function(){
                        alert('failure');
                    }
                    });
                
            });
            $("#btn-update").click(function(){
                console.log('btn-add');
            });
            $("#btn-detele").click(function(){
                console.log('btn-add');
            });

            function success(data){
                console.log('success');
            }
            function error(data){
                console.log('error');
            }
        });

    </script>
@endsection