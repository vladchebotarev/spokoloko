@extends('layouts.app')

@section('content')
    <!-- Hero Full Page -->
    <div class="hero-search-full-page next-sq"  >

        <!-- Hero Search -->
        <!-- .thin .animate .shadow .colored -->
        <div class="h-search-h thin-sq shadow-sq animate-sq" >
            <form action="listing_page.html" class="hero-search-form">
                <div class="search-item">
                    <div class="fltp">
                        <input type="text" value="" required>
                        <label class="placeholder" data-big-placeholder="Szukaj"
                               data-little-placeholder="np: Impreza Zamknięta"></label>
                    </div>
                </div>

                <div class="search-item">
                    <div class="fltp">
                        <select name="dropdown" size="13" class="dropdown" required>
                            <option value="0" selected>Miejsce na wydarzenie</option>
                            <option value="0">Miejsca</option>
                            <option value="2">Obsluga na wydarzenia</option>
                            <option value="3">Muzyka</option>
                            <option value="4">Foto/Video</option>
                            <option value="5">Agencje Eventowe</option>
                            <option value="6">Rozrywki</option>
                            <option value="7">Dekoracje</option>
                            <option value="5">Kuchnia/Catering</option>

                        </select>
                        <label class="placeholder">Wybierz</label>
                    </div>
                </div>

                <div class="search-item">
                    <a href="{{ url('search') }}" class="button-sq hero-search-button" >
                        <i class="icon icon-search"></i>
                    </a>
                </div>

            </form>


        </div>

        <!-- Hero Big - Slick -->
        <div class="sq-slick hero-big slide-up-sq"  data-mobile-arrows="false" data-tablet-arrows="false"
             data-mobile-dots="true" data-tablet-dots="true" data-fade="true" data-speed="500" data-ease="linear">
            <!-- .slide-up .fade .top .bottom -->

            <!--Slide 01-->
            <div class="" >
                <div class="caption-content">
                    <h1 class="font-weight-extrabold-sq">Zorganizuj swój event</h1>
                    <p>Znajdż sale, catering, zespół muzyczny lub zleć organizacje wydarzenia firmom eventowym
                    </p>
                </div>
                <div class="caption-outside">
                    <a class="button anchor-sq" href="#top">
                        <i class="icon big icon-location-pin-2"></i>
                        <span>Explore</span>
                    </a>
                </div>

                <style>

                    .waves {
                        position: absolute;
                        top: 0;
                        left: 0;
                        bottom: 0;
                        display: block;
                        min-width: 100%;
                        min-height: 70%;
                        margin: auto 0;
                    }

                </style>

                <div class="image-wrapper">

                    <div class="image-inner"  style="background-color: #1a1a1a">
                        <div style="width: 100%; height: 100% "></div>
                        <svg class="waves" xmlns="http://www.w3.org/2000/svg" width="1440" height="321.75" viewBox="0 0 960 214.5" preserveAspectRatio="xMinYMid meet"><defs><style>.waves>path{-webkit-animation:a 17390ms ease-in-out infinite alternate-reverse both;-moz-animation:a 17390ms ease-in-out infinite alternate-reverse both;-ms-animation:a 17390ms ease-in-out infinite alternate-reverse both;-o-animation:a 17390ms ease-in-out infinite alternate-reverse both;animation:a 17390ms ease-in-out infinite alternate-reverse both;-webkit-animation-timing-function:cubic-bezier(.25,0,.75,1);-moz-animation-timing-function:cubic-bezier(.25,0,.75,1);-ms-animation-timing-function:cubic-bezier(.25,0,.75,1);-o-animation-timing-function:cubic-bezier(.25,0,.75,1);animation-timing-function:cubic-bezier(.25,0,.75,1);-webkit-will-change:transform;-moz-will-change:transform;-ms-will-change:transform;-o-will-change:transform;will-change:transform}svg>path:nth-of-type(1){-webkit-animation-duration:20580ms;-moz-animation-duration:20580ms;-ms-animation-duration:20580ms;-o-animation-duration:20580ms;animation-duration:20580ms}svg>path:nth-of-type(2){-webkit-animation-delay:-2690ms;-moz-animation-delay:-2690ms;-ms-animation-delay:-2690ms;-o-animation-delay:-2690ms;animation-delay:-2690ms;-webkit-animation-duration:13580ms;-moz-animation-duration:13580ms;-ms-animation-duration:13580ms;-o-animation-duration:13580ms;animation-duration:13580ms}g>path:nth-of-type(1){-webkit-animation-delay:-820ms;-moz-animation-delay:-820ms;-ms-animation-delay:-820ms;-o-animation-delay:-820ms;animation-delay:-820ms;-webkit-animation-duration:10730ms;-moz-animation-duration:10730ms;-ms-animation-duration:10730ms;-o-animation-duration:10730ms;animation-duration:10730ms}svg>path:nth-of-type(1),g>path:nth-of-type(2){-webkit-animation-direction:alternate;-moz-animation-direction:alternate;-ms-animation-direction:alternate;-o-animation-direction:alternate;animation-direction:alternate}@-webkit-keyframes a{0%{-webkit-transform:translateX(-750px);transform:translateX(-750px)}100%{-webkit-transform:translateX(-20px);transform:translateX(-20px)}}@-moz-keyframes a{0%{-moz-transform:translateX(-750px);transform:translateX(-750px)}100%{-moz-transform:translateX(-20px);transform:translateX(-20px)}}@-ms-keyframes a{0%{-ms-transform:translateX(-750px);transform:translateX(-750px)}100%{-ms-transform:translateX(-20px);transform:translateX(-20px)}}@-o-keyframes a{0%{-o-transform:translateX(-750px);transform:translateX(-750px)}100%{-o-transform:translateX(-20px);transform:translateX(-20px)}}@keyframes a{0%{-webkit-transform:translateX(-750px);-moz-transform:translateX(-750px);-ms-transform:translateX(-750px);-o-transform:translateX(-750px);transform:translateX(-750px)}100%{-webkit-transform:translateX(-20px);-moz-transform:translateX(-20px);-ms-transform:translateX(-20px);-o-transform:translateX(-20px);transform:translateX(-20px)}}</style><linearGradient id="a"><stop stop-color="#00A8DE"/><stop offset="0.2" stop-color="#333391"/><stop offset="0.4" stop-color="#E91388"/><stop offset="0.6" stop-color="#EB2D2E"/></linearGradient></defs><path fill="url(#a)" d="M2662.6 1S2532 41.2 2435 40.2c-19.6-.2-37.3-1.3-53.5-2.8 0 0-421.3-59.4-541-28.6-119.8 30.6-206.2 75.7-391 73.3-198.8-2-225.3-15-370.2-50-145-35-218 37-373.3 36-19.6 0-37.5-1-53.7-3 0 0-282.7-36-373.4-38C139 26 75 46-1 46v106c17-1.4 20-2.3 37.6-1.2 130.6 8.4 210 56.3 287 62.4 77 6 262-25 329.3-23.6 67 1.4 107 22.6 193 23.4 155 1.5 249-71 380-62.5 130 8.5 209 56.3 287 62.5 77 6 126-18 188-18 61.4 0 247-38 307.4-46 159.3-20 281.2 29 348.4 30 67 2 132.2 6 217.4 7 39.3 0 87-11 87-11V1z"/><path fill="#F2F5F5" d="M2663.6 73.2S2577 92 2529 89c-130.7-8.5-209.5-56.3-286.7-62.4s-125.7 18-188.3 18c-5 0-10-.4-14.5-.7-52-5-149.2-43-220.7-39-31.7 2-64 14-96.4 30-160.4 80-230.2-5.6-340.4-18-110-12-146.6 20-274 36S820.4 0 605.8 0C450.8 0 356 71 225.2 62.2 128 56 60.7 28-.3 11.2V104c22 7.3 46 14.2 70.4 16.7 110 12.3 147-19.3 275-35.5s350 39.8 369 43c27 4.3 59 8 94 10 13 .5 26 1 39 1 156 2 250-70.3 381-62 130.5 8.2 209.5 56.3 286.7 62 77 6.4 125.8-18 188.3-17.5 5 0 10 .2 14.3.6 52 5 145 49.5 220.7 38.2 32-5 64-15 96.6-31 160.5-79.4 230.3 6 340 18.4 110 12 146.3-20 273.7-36l15.5-2V73l1-.5z"/><g fill="none" stroke="#E2E9E9" stroke-width="1"><path d="M0 51.4c3.4.6 7.7 1.4 11 2.3 133.2 34 224.3 34 308.6 34 110.2 0 116.7 36.6 229.8 26 113-11 128.7-44 222-42.6C865 73 889 38 1002 27c113-10.8 119.6 25.6 229.8 25.6 84.4 0 175.4 0 308.6 34 133 34.2 277-73 379.4-84.3 204-22.5 283.6 128.7 283.6 128.7"/><path d="M0 6C115.7-6 198.3 76.6 308 76.6c109.6 0 131.8-20 223-28.3 114.3-10.2 238.2 0 238.2 0s124 10.2 238.3 0c91-8.2 113.2-28 223-28S1425 103 1541 91c115.8-11.8 153.3-69 269.3-84.6 116-15.5 198.4 71 308 71 109.8 0 131.8-20 223-28 114-10.2 237.7 0 237.7 0s37.4 2.4 82.8 3.7"/></g></svg>
                        <script>

                            /* Copyright (C) 2013 Justin Windle, http://soulwire.co.uk */

                            (function ( root, factory ) {

                                if ( typeof exports === 'object' ) {

                                    // CommonJS like
                                    module.exports = factory(root, root.document);

                                } else if ( typeof define === 'function' && define.amd ) {

                                    // AMD
                                    define( function() { return factory( root, root.document ); });

                                } else {

                                    // Browser global
                                    root.Sketch = factory( root, root.document );
                                }

                            }( typeof window !== "undefined" ? window : this, function ( window, document ) {


                                "use strict";

                                /*
                                ----------------------------------------------------------------------

                                  Config

                                ----------------------------------------------------------------------
                                */

                                var MATH_PROPS = 'E LN10 LN2 LOG2E LOG10E PI SQRT1_2 SQRT2 abs acos asin atan ceil cos exp floor log round sin sqrt tan atan2 pow max min'.split( ' ' );
                                var HAS_SKETCH = '__hasSketch';
                                var M = Math;

                                var CANVAS = 'canvas';
                                var WEBGL = 'webgl';
                                var DOM = 'dom';

                                var doc = document;
                                var win = window;

                                var instances = [];

                                var defaults = {

                                    fullscreen: true,
                                    autostart: true,
                                    autoclear: true,
                                    autopause: true,
                                    container: doc.body,
                                    interval: 1,
                                    globals: true,
                                    retina: false,
                                    type: CANVAS
                                };

                                var keyMap = {

                                    8: 'BACKSPACE',
                                    9: 'TAB',
                                    13: 'ENTER',
                                    16: 'SHIFT',
                                    27: 'ESCAPE',
                                    32: 'SPACE',
                                    37: 'LEFT',
                                    38: 'UP',
                                    39: 'RIGHT',
                                    40: 'DOWN'
                                };

                                /*
                                ----------------------------------------------------------------------

                                  Utilities

                                ----------------------------------------------------------------------
                                */

                                function isArray( object ) {

                                    return Object.prototype.toString.call( object ) == '[object Array]';
                                }

                                function isFunction( object ) {

                                    return typeof object == 'function';
                                }

                                function isNumber( object ) {

                                    return typeof object == 'number';
                                }

                                function isString( object ) {

                                    return typeof object == 'string';
                                }

                                function keyName( code ) {

                                    return keyMap[ code ] || String.fromCharCode( code );
                                }

                                function extend( target, source, overwrite ) {

                                    for ( var key in source )

                                        if ( overwrite || !( key in target ) )

                                            target[ key ] = source[ key ];

                                    return target;
                                }

                                function proxy( method, context ) {

                                    return function() {

                                        method.apply( context, arguments );
                                    };
                                }

                                function clone( target ) {

                                    var object = {};

                                    for ( var key in target ) {

                                        if ( key === 'webkitMovementX' || key === 'webkitMovementY' )
                                            continue;

                                        if ( isFunction( target[ key ] ) )

                                            object[ key ] = proxy( target[ key ], target );

                                        else

                                            object[ key ] = target[ key ];
                                    }

                                    return object;
                                }

                                /*
                                ----------------------------------------------------------------------

                                  Constructor

                                ----------------------------------------------------------------------
                                */

                                function constructor( context ) {

                                    var request, handler, target, parent, bounds, index, suffix, clock, node, copy, type, key, val, min, max, w, h;

                                    var counter = 0;
                                    var touches = [];
                                    var resized = false;
                                    var setup = false;
                                    var ratio = win.devicePixelRatio || 1;
                                    var isDiv = context.type == DOM;
                                    var is2D = context.type == CANVAS;

                                    var mouse = {
                                        x:  0.0, y:  0.0,
                                        ox: 0.0, oy: 0.0,
                                        dx: 0.0, dy: 0.0
                                    };

                                    var eventMap = [

                                        context.eventTarget || context.element,

                                        pointer, 'mousedown', 'touchstart',
                                        pointer, 'mousemove', 'touchmove',
                                        pointer, 'mouseup', 'touchend',
                                        pointer, 'click',
                                        pointer, 'mouseout',
                                        pointer, 'mouseover',

                                        doc,

                                        keypress, 'keydown', 'keyup',

                                        win,

                                        active, 'focus', 'blur',
                                        resize, 'resize'
                                    ];

                                    var keys = {}; for ( key in keyMap ) keys[ keyMap[ key ] ] = false;

                                    function trigger( method ) {

                                        if ( isFunction( method ) )

                                            method.apply( context, [].splice.call( arguments, 1 ) );
                                    }

                                    function bind( on ) {

                                        for ( index = 0; index < eventMap.length; index++ ) {

                                            node = eventMap[ index ];

                                            if ( isString( node ) )

                                                target[ ( on ? 'add' : 'remove' ) + 'EventListener' ].call( target, node, handler, false );

                                            else if ( isFunction( node ) )

                                                handler = node;

                                            else target = node;
                                        }
                                    }

                                    function update() {

                                        cAF( request );
                                        request = rAF( update );

                                        if ( !setup ) {

                                            trigger( context.setup );
                                            setup = isFunction( context.setup );
                                        }

                                        if ( !resized ) {
                                            trigger( context.resize );
                                            resized = isFunction( context.resize );
                                        }

                                        if ( context.running && !counter ) {

                                            context.dt = ( clock = +new Date() ) - context.now;
                                            context.millis += context.dt;
                                            context.now = clock;

                                            trigger( context.update );

                                            // Pre draw

                                            if ( is2D ) {

                                                if ( context.retina ) {

                                                    context.save();

                                                    if (context.autoclear) {
                                                        context.scale( ratio, ratio );
                                                    }
                                                }

                                                if ( context.autoclear )

                                                    context.clear();
                                            }

                                            // Draw

                                            trigger( context.draw );

                                            // Post draw

                                            if ( is2D && context.retina )

                                                context.restore();
                                        }

                                        counter = ++counter % context.interval;
                                    }

                                    function resize() {

                                        target = isDiv ? context.style : context.canvas;
                                        suffix = isDiv ? 'px' : '';

                                        w = context.width;
                                        h = context.height;

                                        if ( context.fullscreen ) {

                                            h = context.height = win.innerHeight;
                                            w = context.width = win.innerWidth;
                                        }

                                        if ( context.retina && is2D && ratio ) {

                                            target.style.height = h + 'px';
                                            target.style.width = w + 'px';

                                            w *= ratio;
                                            h *= ratio;
                                        }

                                        if ( target.height !== h )

                                            target.height = h + suffix;

                                        if ( target.width !== w )

                                            target.width = w + suffix;

                                        if ( is2D && !context.autoclear && context.retina )

                                            context.scale( ratio, ratio );

                                        if ( setup ) trigger( context.resize );
                                    }

                                    function align( touch, target ) {

                                        bounds = target.getBoundingClientRect();

                                        touch.x = touch.pageX - bounds.left - (win.scrollX || win.pageXOffset);
                                        touch.y = touch.pageY - bounds.top - (win.scrollY || win.pageYOffset);

                                        return touch;
                                    }

                                    function augment( touch, target ) {

                                        align( touch, context.element );

                                        target = target || {};

                                        target.ox = target.x || touch.x;
                                        target.oy = target.y || touch.y;

                                        target.x = touch.x;
                                        target.y = touch.y;

                                        target.dx = target.x - target.ox;
                                        target.dy = target.y - target.oy;

                                        return target;
                                    }

                                    function process( event ) {

                                        event.preventDefault();

                                        copy = clone( event );
                                        copy.originalEvent = event;

                                        if ( copy.touches ) {

                                            touches.length = copy.touches.length;

                                            for ( index = 0; index < copy.touches.length; index++ )

                                                touches[ index ] = augment( copy.touches[ index ], touches[ index ] );

                                        } else {

                                            touches.length = 0;
                                            touches[0] = augment( copy, mouse );
                                        }

                                        extend( mouse, touches[0], true );

                                        return copy;
                                    }

                                    function pointer( event ) {

                                        event = process( event );

                                        min = ( max = eventMap.indexOf( type = event.type ) ) - 1;

                                        context.dragging =

                                            /down|start/.test( type ) ? true :

                                                /up|end/.test( type ) ? false :

                                                    context.dragging;

                                        while( min )

                                            isString( eventMap[ min ] ) ?

                                                trigger( context[ eventMap[ min-- ] ], event ) :

                                                isString( eventMap[ max ] ) ?

                                                    trigger( context[ eventMap[ max++ ] ], event ) :

                                                    min = 0;
                                    }

                                    function keypress( event ) {

                                        key = event.keyCode;
                                        val = event.type == 'keyup';
                                        keys[ key ] = keys[ keyName( key ) ] = !val;

                                        trigger( context[ event.type ], event );
                                    }

                                    function active( event ) {

                                        if ( context.autopause )

                                            ( event.type == 'blur' ? stop : start )();

                                        trigger( context[ event.type ], event );
                                    }

                                    // Public API

                                    function start() {

                                        context.now = +new Date();
                                        context.running = true;
                                    }

                                    function stop() {

                                        context.running = false;
                                    }

                                    function toggle() {

                                        ( context.running ? stop : start )();
                                    }

                                    function clear() {

                                        if ( is2D )

                                            context.clearRect( 0, 0, context.width * ratio, context.height * ratio );
                                    }

                                    function destroy() {

                                        parent = context.element.parentNode;
                                        index = instances.indexOf( context );

                                        if ( parent ) parent.removeChild( context.element );
                                        if ( ~index ) instances.splice( index, 1 );

                                        bind( false );
                                        stop();
                                    }

                                    extend( context, {

                                        touches: touches,
                                        mouse: mouse,
                                        keys: keys,

                                        dragging: false,
                                        running: false,
                                        millis: 0,
                                        now: NaN,
                                        dt: NaN,

                                        destroy: destroy,
                                        toggle: toggle,
                                        clear: clear,
                                        start: start,
                                        stop: stop
                                    });

                                    instances.push( context );

                                    return ( context.autostart && start(), bind( true ), resize(), update(), context );
                                }

                                /*
                                ----------------------------------------------------------------------

                                  Global API

                                ----------------------------------------------------------------------
                                */

                                var element, context, Sketch = {

                                    CANVAS: CANVAS,
                                    WEB_GL: WEBGL,
                                    WEBGL: WEBGL,
                                    DOM: DOM,

                                    instances: instances,

                                    install: function( context ) {

                                        if ( !context[ HAS_SKETCH ] ) {

                                            for ( var i = 0; i < MATH_PROPS.length; i++ )

                                                context[ MATH_PROPS[i] ] = M[ MATH_PROPS[i] ];

                                            extend( context, {

                                                TWO_PI: M.PI * 2,
                                                HALF_PI: M.PI / 2,
                                                QUARTER_PI: M.PI / 4,

                                                random: function( min, max ) {

                                                    if ( isArray( min ) )

                                                        return min[ ~~( M.random() * min.length ) ];

                                                    if ( !isNumber( max ) )

                                                        max = min || 1, min = 0;

                                                    return min + M.random() * ( max - min );
                                                },

                                                lerp: function( min, max, amount ) {

                                                    return min + amount * ( max - min );
                                                },

                                                map: function( num, minA, maxA, minB, maxB ) {

                                                    return ( num - minA ) / ( maxA - minA ) * ( maxB - minB ) + minB;
                                                }
                                            });

                                            context[ HAS_SKETCH ] = true;
                                        }
                                    },

                                    create: function( options ) {

                                        options = extend( options || {}, defaults );

                                        if ( options.globals ) Sketch.install( self );

                                        element = options.element = options.element || doc.createElement( options.type === DOM ? 'div' : 'canvas' );

                                        context = options.context = options.context || (function() {

                                            switch( options.type ) {

                                                case CANVAS:

                                                    return element.getContext( '2d', options );

                                                case WEBGL:

                                                    return element.getContext( 'webgl', options ) || element.getContext( 'experimental-webgl', options );

                                                case DOM:

                                                    return element.canvas = element;
                                            }

                                        })();

                                        ( options.container || doc.body ).appendChild( element );

                                        return Sketch.augment( context, options );
                                    },

                                    augment: function( context, options ) {

                                        options = extend( options || {}, defaults );

                                        options.element = context.canvas || context;
                                        options.element.className += ' sketch';

                                        extend( context, options, true );

                                        return constructor( context );
                                    }
                                };

                                /*
                                ----------------------------------------------------------------------

                                  Shims

                                ----------------------------------------------------------------------
                                */

                                var vendors = [ 'ms', 'moz', 'webkit', 'o' ];
                                var scope = self;
                                var then = 0;

                                var a = 'AnimationFrame';
                                var b = 'request' + a;
                                var c = 'cancel' + a;

                                var rAF = scope[ b ];
                                var cAF = scope[ c ];

                                for ( var i = 0; i < vendors.length && !rAF; i++ ) {

                                    rAF = scope[ vendors[ i ] + 'Request' + a ];
                                    cAF = scope[ vendors[ i ] + 'Cancel' + a ];
                                }

                                scope[ b ] = rAF = rAF || function( callback ) {

                                    var now = +new Date();
                                    var dt = M.max( 0, 16 - ( now - then ) );
                                    var id = setTimeout( function() {
                                        callback( now + dt );
                                    }, dt );

                                    then = now + dt;
                                    return id;
                                };

                                scope[ c ] = cAF = cAF || function( id ) {
                                    clearTimeout( id );
                                };

                                /*
                                ----------------------------------------------------------------------

                                  Output

                                ----------------------------------------------------------------------
                                */

                                return Sketch;

                            }));

                            // ----------------------------------------
                            // Particle
                            // ----------------------------------------

                            function Particle( x, y, radius ) {
                                this.init( x, y, radius );
                            }

                            Particle.prototype = {

                                init: function( x, y, radius ) {

                                    this.alive = true;

                                    this.radius = radius || 10;
                                    this.wander = 0.15;
                                    this.theta = random( TWO_PI );
                                    this.drag = 0.92;
                                    this.color = '#fff';

                                    this.x = x || 0.0;
                                    this.y = y || 0.0;

                                    this.vx = 0.0;
                                    this.vy = 0.0;
                                },

                                move: function() {

                                    this.x += this.vx;
                                    this.y += this.vy;

                                    this.vx *= this.drag;
                                    this.vy *= this.drag;

                                    this.theta += random( -0.5, 0.5 ) * this.wander;
                                    this.vx += sin( this.theta ) * 0.1;
                                    this.vy += cos( this.theta ) * 0.1;

                                    this.radius *= 0.96;
                                    this.alive = this.radius > 0.5;
                                },

                                draw: function( ctx ) {

                                    ctx.beginPath();
                                    ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
                                    ctx.fillStyle = this.color;
                                    ctx.fill();
                                }
                            };

                            // ----------------------------------------
                            // Example
                            // ----------------------------------------

                            var MAX_PARTICLES = 280;
                            var COLOURS = [ '#69D2E7', '#A7DBD8', '#E0E4CC', '#F38630', '#FA6900', '#FF4E50', '#F9D423' ];

                            var particles = [];
                            var pool = [];

                            var demo = Sketch.create({
                                container: document.getElementById( 'blablabla' ),
                                retina: 'auto'
                            });

                            demo.setup = function() {

                                // Set off some initial particles.
                                var i, x, y;

                                for ( i = 0; i < 20; i++ ) {
                                    x = ( demo.width * 0.5 ) + random( -100, 100 );
                                    y = ( demo.height * 0.5 ) + random( -100, 100 );
                                    demo.spawn( x, y );
                                }
                            };

                            demo.spawn = function( x, y ) {

                                var particle, theta, force;

                                if ( particles.length >= MAX_PARTICLES )
                                    pool.push( particles.shift() );

                                particle = pool.length ? pool.pop() : new Particle();
                                particle.init( x, y, random( 5, 40 ) );

                                particle.wander = random( 0.5, 2.0 );
                                particle.color = random( COLOURS );
                                particle.drag = random( 0.9, 0.99 );

                                theta = random( TWO_PI );
                                force = random( 2, 8 );

                                particle.vx = sin( theta ) * force;
                                particle.vy = cos( theta ) * force;

                                particles.push( particle );
                            };

                            demo.update = function() {

                                var i, particle;

                                for ( i = particles.length - 1; i >= 0; i-- ) {

                                    particle = particles[i];

                                    if ( particle.alive ) particle.move();
                                    else pool.push( particles.splice( i, 1 )[0] );
                                }
                            };

                            demo.draw = function() {

                                demo.globalCompositeOperation  = 'lighter';

                                for ( var i = particles.length - 1; i >= 0; i-- ) {
                                    particles[i].draw( demo );
                                }
                            };

                            demo.mousemove = function() {

                                var particle, theta, force, touch, max, i, j, n;

                                for ( i = 0, n = demo.touches.length; i < n; i++ ) {

                                    touch = demo.touches[i], max = random( 1, 4 );
                                    for ( j = 0; j < max; j++ ) {
                                        demo.spawn( touch.x, touch.y );
                                    }

                                }
                            };




                        </script>



                    </div>
                </div>
            </div>


        </div>

    </div>

    <div class="ui layout" id="top">
        <div class="ui grid container">
            <div class="row">
                <div class="ui twelve wide computer column">
                    <div class="typo-section-sq bottom-default">

                        <div class="typo-section-header-sq">
                            <h2 class="text-align-left-sq">Czego brakuje do wydarzenia marzen</h2>
                            <p class="text-align-left-sq">Zobacz najlepszych uslugodawcow w calej Polsce.</p>
                        </div>

                        <div class="magic-grid photo-sq hover-default hover-center">

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="https://res.cloudinary.com/splacer/image/upload/c_fill,e_improve,f_jpg,g_auto,h_500,w_500/v1/production/Splaces/000313/lustttg626tvzsfixome.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Zarezerwuj"></p>
                                        <p class="typo-title-sq">Miejsce na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="https://res.cloudinary.com/splacer/image/upload/c_fill,e_improve,f_jpg,g_auto,h_505,w_550/v1/production/Splaces/000313/lustttg626tvzsfixome.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Najlepsza"></p>
                                        <p class="typo-title-sq">Obsługa na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="https://res.cloudinary.com/splacer/image/upload/c_fill,e_improve,f_jpg,g_auto,h_250,w_550/v1/production/Splaces/000313/lustttg626tvzsfixome.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Nagraj"></p>
                                        <p class="typo-title-sq">Foto/Video</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="https://res.cloudinary.com/splacer/image/upload/c_fill,e_improve,f_jpg,g_auto,h_372,w_510/v1/production/Splaces/000313/lustttg626tvzsfixome.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Znajdż"></p>
                                        <p class="typo-title-sq">Catering na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="https://res.cloudinary.com/splacer/image/upload/c_fill,e_improve,f_jpg,g_auto,h_35,w_500/v1/production/Splaces/000313/lustttg626tvzsfixome.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Znajdż"></p>
                                        <p class="typo-title-sq">Firmy eventowe</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_photo_dec.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Dodaj"></p>
                                        <p class="typo-title-sq">Dekoracje na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_photo_mu.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="listing_page.html" class="typo-sq">
                                        <span class="typo-whitespace"></span>
                                        <p class="typo-label-sq" data-label-before="Krakow"
                                           data-label-after="Melodyczna"></p>
                                        <p class="typo-title-sq">Myzyka na wydarzenie</p>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <a class="more-trigger" data-more="See All" href="listing_page.html">
                            <i class="icon icon-arrow-down-122"></i>
                        </a>
                    </div>

                </div>


            </div>
        </div>


        <div class="ui grid container">
            <div class="row">
                <div class="ui column">
                    <div class="typo-section-sq bottom-default">

                        <div class="typo-section-header-sq" style="padding-top: 0px">
                            <h2 class="text-align-left-sq">Gdzie planujesz wydarzenie?</h2>
                            <p class="text-align-left-sq">Wibierz miasto i wyszukaj wsrod najlepszych uslugowadcow <br>
                                Pamiętaj że zawsze możesz zlecic wyszukiwanie i dostac oferte od Spokoloko.</p>
                        </div>

                        <div class="magic-grid category-sq special-sq hover-scale">
                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_01.jpg"
                                                     alt="">

                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Krakow</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_02.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Warszawa</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_03.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Wroclaw</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_04.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Trojmiasto</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_05.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Katowice</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_06.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Poznań</p>
                                    </a>

                                </div>
                            </div>

                            <!-- item-->
                            <div class="item">
                                <div class="item-inner">

                                    <!-- image container -->
                                    <div class="image-sq lazy">
                                        <div class="image-wrapper">
                                            <div class="image-inner">
                                                <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_category_special_07.jpg"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- typography container-->
                                    <a href="article_listing.html" class="typo-sq">
                                        <p class="typo-title-sq">Inne</p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>


        <div class="ui layout" id="top2">
            <div class="ui grid container">

                <div class="row">
                    <div class="ui column">

                        <div class="typo-section-sq">
                            <div class="typo-section-header-sq">
                                <h2 class="text-align-center-sq">Popular Places</h2>
                                <p class="heading-inline text-align-center-sq">
                                    <i class="icon icon-slim-arrow-left sq-prev-button"></i>
                                    <span>Find the most visited places in entire world.</span>
                                    <i class="icon icon-slim-arrow-right sq-next-button"></i>
                                </p>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="ui grid container typo-section-sq bottom-default">
                    <div class="row">

                        <div class="sq-slick article-sq-slick" data-arrows="false" data-center-mode="true"

                             data-center-padding="0px" data-desktop-center-padding="0px" data-show-slides="3"
                             data-scroll-slides="5" data-tablet-show-slides="2" data-tablet-scroll-slides="2"
                             data-mobile-show-slides="1" data-mobile-scroll-slides="2" data-tablet-center-padding="0px"
                             data-mobile-center-padding="50px">

                            <!-- Slide 01-->
                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_01.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_02.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_03.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_01.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_02.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="property-item caption-sq">
                                    <div class="property-item-inner">

                                        <div class="price-tag-sq">
                                            <span>od </span>200
                                            PLN <span>/1 godz</span>
                                        </div>
                                        <a class="add-wishlist modal-ui-trigger" href=""
                                           data-trigger-for="wishlist">
                                            <i class="icon icon-heart-line"></i>
                                        </a>


                                        <a class="image-sq lazy" href="venue/after-beng-club"
                                           target="_blank">
                                                <span class="image-wrapper">
                                                    <span class="image-inner">
                                                        <img src="new-assets/images/property/property_little_03.jpg"
                                                             alt="" class="" style="height: 100%">
                                                        {{--<img src="{{ asset('new-assets/images/property/property_little_01.jpg') }}"
                                                             alt="" class="">--}}
                                                    </span>
                                                </span>
                                        </a>

                                        <div class="main-details">
                                            <div class="title-row">
                                                <a href="venue/after-beng-club" target="_blank"
                                                   class="title-sq">After Beng</a>


                                            </div>
                                            <div class="biz-adres">
                                                <strong style="padding-right: 10px;">Klub muzycny</strong>| Rynek głowny 28
                                            </div>

                                            <div class="icons-row">
                                                <div class="icons-column">
                                                    <i class="icon icon-star-2"></i> 8.6
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-account-group-5"></i> 200
                                                </div>
                                                <div class="icons-column">
                                                    <i class="icon icon-home-3"></i> 100m²
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div>

                        <div class="ui twelve wide mobile twelve wide tablet twelve wide computer twelve wide large screen twelve wide widescreen column">
                            <div class="typo-section-sq bottom-default">
                                <a href="listing_page.html" class="more-trigger" data-more="Discover All">
                                    <i class="icon icon-arrow-down-122"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="promo-section">

                <!-- content -->
                <div class="ui container grid centered">
                    <div class="row">
                        <div class="ui twelve wide mobile ten wide tablet eight wide computer six wide large screen six wide widescreen column">
                            <div class="promo-content style-01">
                                <h2>Udostepnij swoj biznes</h2>
                                <p>Pomagaj organizowac eventy w calej polsce. Dodaj swoj biznes do serwisu Spokoloko
                                    całkowicie za darmo..</p>

                                <a href="{{ url('b2b') }}" class="button-sq see-through-sq"> Dowiedzie sie wiecej </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- picture -->
                <div class="image-wrapper">
                    <div class="image-inner">
                        <img class="image-sq lazy" src="new-assets/images/promo_section/promo_section_01.jpg" alt="">
                    </div>
                </div>
            </div>

            <!--  <div class="ui grid container">
                  <div class="row">
                      <div class="ui column">

                          <div class="typo-section-sq bottom-big">
                              <div class="typo-section-header-sq">
                                  <h2 class="text-align-center-sq">Popularne w Krakowie</h2>

                                  <p class="text-align-center-sq">Zobacz z ktorych uslug zazwyczaj korzystaja w Krakowie.</p>
                              </div>

                              <div class="ui grid">

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">112 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq lazy" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_01.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">
                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Downtown Sweet House</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_01.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 8.6
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 4
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 6
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">78 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>


                                              <a class="image-sq lazy" href="property_page.html">
                                                      <span class="image-wrapper">
                                                          <span class="image-inner">
                                                              <img src="new-assets/images/property/property_little_02.jpg" alt="" class="">
                                                          </span>
                                                      </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Large and confortable double room</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_02.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.8
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 3
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">51 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq lazy" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_03.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>


                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Modern studio flat with garden</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_03.jpg"
                                                               alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 1
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 3
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">130 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq lazy" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_04.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>


                                              <div class="main-details">
                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Bright clean room close to Brixton</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_04.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 8.1
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">59 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>

                                              <a class="image-sq lazy" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_05.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Romantic Suite in family home</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_05.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 4
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 1
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                                  <div class="twelve wide mobile four wide tablet four wide computer column">
                                      <div class="property-item caption-sq small-sq">
                                          <div class="property-item-inner">

                                              <div class="price-tag-sq">32 &euro; <span>/ night</span></div>
                                              <a class="add-wishlist modal-ui-trigger" href="" data-trigger-for="wishlist">
                                                  <i class="icon icon-add-wishlist"></i>
                                              </a>


                                              <a class="image-sq lazy" href="property_page.html">
                                                  <span class="image-wrapper">
                                                      <span class="image-inner">
                                                          <img src="new-assets/images/property/property_little_06.jpg" alt="" class="">
                                                      </span>
                                                  </span>
                                              </a>

                                              <div class="main-details">

                                                  <div class="title-row">
                                                      <a href="property_page.html" class="title-sq">Quit and bright room in the heart of Amsterdam</a>
                                                      <a href="vendor_details.html" class="avatar-sq">
                                                          <img src="new-assets/images/avatar/avatar_06.jpg" alt="">
                                                      </a>
                                                  </div>

                                                  <div class="icons-row">
                                                      <div class="icons-column">
                                                          <i class="icon icon-heart"></i> 7.5
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-account-group-5"></i> x 7
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-door-simple"></i> x 2
                                                      </div>
                                                      <div class="icons-column">
                                                          <i class="icon icon-bed-double"></i> x 2
                                                      </div>
                                                  </div>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>

                              <a href="listing_page.html" class="more-trigger" data-more="Discover All">
                                  <i class="icon icon-arrow-down-122"></i>
                              </a>
                          </div>
                      </div>
                  </div>
              </div>

              -->>


            <div class="ui grid container">
                <div class="row">
                    <div class="ui column">


                        <div class="typo-section-sq bottom-big">
                            <div class="typo-section-header-sq">
                                <h2 class="text-align-center-sq">News</h2>
                                <p class="text-align-center-sq"> Nunc sit amet velit nibh. Proin consectetur, ante quis
                                    tristique mattis, massa massa condimentum enim.</p>
                            </div>


                            <div class="magic-grid article-sq hover-scale">

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_01.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Travel"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Getting Cheap Airfare For Last Minute Travel</p>
                                            <p class="typo-desc-sq">The city of southern California, san diego is
                                                locally known as ‘America’s Finest City’. It’s located on San Diego Bay,
                                                an inlet of the Pacific Ocean near the Mexican border. San Diego is the
                                                second largest city in</p>

                                            <a href="article.html" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_02.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Beauty"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">10 Steps To Look Younger</p>
                                            <p class="typo-desc-sq">Lots of people are unaware of the fact that adult
                                                acne exists and they seem not to know how to treat adult acne. People
                                                have this misconception that acne only happens during teenage years and
                                                gradually wears off as they age. For most people, this fact may be true
                                                but it is important to note that acne does not start during teenage
                                                years only. However, it is important to note that there are a
                                                significant number of adults that experience such condition.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_03.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Cooking"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">The Benefits And Drawbacks Of Buying Designer
                                                Kitchenware Products</p>
                                            <p class="typo-desc-sq">When it is time to bake cookies, we usually think
                                                that it is complicated, that it takes a lot of time. In one word : that
                                                it is not worthwhile ! We will show you hereunder that it is simply not
                                                true. Baking cookies is easy, fast and, most important, fun. Come and
                                                join all our readers who decided to give it a try and now,</p>


                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_04.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">

                                            <p class="typo-label-sq" data-label-before="Advertising"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Enhance Your Brand Potential With Giant Advertising
                                                Blimps</p>
                                            <p class="typo-desc-sq">It is a small world after all. Globalization is that
                                                great process that started perhaps with Mr. Marco Polo, but has since
                                                regained its prestige after a short stint of protectionism following the
                                                great depression</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_05.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Motivation"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Counting Your Chicken Before They Hatch</p>
                                            <p class="typo-desc-sq">Be more concerned with your character than with your
                                                reputation. Your character is what you really are while your reputation
                                                is merely what others think you are.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                                <!-- item-->
                                <div class="item">
                                    <div class="item-inner">

                                        <!-- image container -->
                                        <a class="image-sq lazy" href="article.html">
                    	                <span class="image-wrapper">
                    	                    <span class="image-inner">
                    	                        <img class="image-sq lazy"
                                                     src="new-assets/images/magic_grid/magic_grid_article_06.jpg"
                                                     alt="">
                    	                    </span>
                    	                </span>
                                        </a>

                                        <!-- typography container-->
                                        <div class="typo-sq">
                                            <p class="typo-label-sq" data-label-before="Tech"
                                               data-label-after="Book a home in"></p>
                                            <p class="typo-title-sq">Download Anything Now A Days</p>
                                            <p class="typo-desc-sq">Do you want to download free song for ipod? If so,
                                                reading this article could save you from getting in to a lot of trouble!
                                                Downloading music to your Ipod has more than one pitfall associated with
                                                it, and this article will tell you the best way to download free song
                                                for Ipod.</p>

                                            <a href="" class="read-more-sq">read more <i
                                                        class="icon icon-arrow-right-122"></i></a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <a href="article_listing.html" class="more-trigger" data-more="View More">
                                <i class="icon icon-arrow-down-122"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection