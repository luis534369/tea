﻿@extends('layouts.app')

@section('content')
             <!--organicfood wrapper end-->
             
            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="#">Home</a> ></li>
                            <li>login</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            
             
           
            <!--login section start-->
            <div class="page_login_section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                            <div class="login_page_form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="input_text">
                                            	<label for="name">Username or email <span>*</span></label>
                                            	<input id="name" type="text">    
                                            </div>
                                        </div>
                                         <div class="col-12">
                                            <div class="input_text">
												<label for="password">Passwords <span>*</span></label>
												<input id="password" type="password"> 
											</div>   
                                        </div>
                                        <div class="col-12">
                                            <div class="login_submit">
                                            	<input class="inline" value="Login" name="Login" type="submit">
												<label class="inline" for="rememberme">
													<input id="rememberme" type="checkbox">
													Remember me	
												</label>   
                                            </div> 
                                        </div>      
                                    </div>
                                </form>    
                            </div>    
                        </div>    
                    </div>    
                </div>  
            </div>
            
            <!--login section end-->
@endsection
