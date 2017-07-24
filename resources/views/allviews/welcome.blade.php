@extends('layout')
@section('content')
    <div class="columns">
        <div class="column is-2" id='logo-column'>
            <div id="logo" class="is-hidden-mobile">
                <img src="{{asset('/img/MTU.png')}}" alt="Image">
                <p>Mandalay
                    <br> Technological
                    <br> University</p>
            </div>
        </div>
        <div class="column is-8" style="background-color: #ededed;
">
            <div class="blueberry column is-10">
                <ul class="slides">
                    <li>
                        <img src="{{asset('./img/star_wars_rogue_one-03.jpg')}}" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                    <li>
                        <img src="{{asset('./img/star_wars_rogue_one-03.jpg')}}" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                    <li>
                        <img src="{{asset('./img/star_wars_rogue_one-03.jpg')}}" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                    <li>
                        <img src="{{asset('./img/star_wars_rogue_one-03.jpg')}}" />
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </li>
                </ul>
                <!-- Optional, see options below -->
                <ul class="pager">
                    <li><a href="#"><span></span></a></li>
                    <li><a href="#"><span></span></a></li>
                    <li><a href="#"><span></span></a></li>
                    <li><a href="#"><span></span></a></li>
                </ul>
                <!-- Optional, see options below -->
            </div>
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    <div class="tile is-parent">
                        <div class="tile">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-16by9">
                                        <img src="{{asset('./img/1280x960.png')}}" alt="Image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a>#css</a> <a>#responsive</a>
                                        <br>
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-16by9">
                                        <img src="{{asset('./img/1280x960.png')}}" alt="Image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                         ျမန္မာနိ်စိဟျ္ညး်ုူးိဘ္ျု​ေဘ်လ ူဘး <a>@bulmaio</a>.
                                        <a>#css</a> <a>#responsive</a>
                                        <br>
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-16by9">
                                        <img src="{{asset('./img/1280x960.png')}}" alt="Image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a>#css</a> <a>#responsive</a>
                                        <br>
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-16by9">
                                        <img src="{{asset('./img/1280x960.png')}}" alt="Image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                        <a>#css</a> <a>#responsive</a>
                                        <br>
                                        <small>11:09 PM - 1 Jan 2016</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <div class="tile is-child is-vertical is-6">
                            <div class="remark">
                                <p>Events</p>
                            </div>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="{{asset('./img/128x128.png')}}">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="welcome-events-p">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="{{asset('./img/128x128.png')}}">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="welcome-events-p">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="{{asset('./img/128x128.png')}}">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="welcome-events-p">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <article class="media">
                                <figure class="media-left">
                                    <p class="image is-64x64">
                                        <img src="{{asset('./img/128x128.png')}}">
                                    </p>
                                </figure>
                                <div class="media-content">
                                    <div class="content">
                                        <p class="welcome-events-p">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="tile is-child is-6">
                            <div class="remark">
                                <p>Announcements</p>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="content">
                                        <p class="welcome-events-p">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                                        </p>
                                    </div>
                                </div>
                                <footer class="card-footer">
                                    <p class="card-footer-item">
                                        <span>Tick</span>
                                    </p>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile media">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                </div>
        </div>
    </div>
@endsection
