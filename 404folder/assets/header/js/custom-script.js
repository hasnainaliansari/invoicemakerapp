(function ($) {
  "use strict";

  // Header Sticky
  $(window).on("scroll", function () {
    const header = $(".header");
    const headerHeight = header.outerHeight(); // Get the header's height
    const isAbsolute = header.css("position") === "absolute";

    if ($(window).scrollTop() > 10) {
      // Add sticky class
      if (!header.hasClass("sticky")) {
        header.addClass("sticky");

        // Only add placeholder if header is not absolutely positioned
        if (!isAbsolute) {
          // Check if the placeholder already exists
          if ($(".sticky-placeholder").length === 0) {
            header.after(
              `<div class="sticky-placeholder" style="height: ${headerHeight}px;"></div>`
            );
          }
        }
      }
    } else {
      header.removeClass("sticky");
      // Remove placeholder if it exists
      $(".sticky-placeholder").remove();
    }
  });

  $(document).ready(function() {
    const $dropdown = $('.language-switcher .dropdown');
    const $dropdownBtn = $('.language-switcher .dropdown-btn');
    const $dropdownContent = $('.language-switcher .dropdown-content');
  
    // Toggle dropdown
    $dropdownBtn.on('click', function(e) {
        e.stopPropagation();
        $dropdownContent.toggleClass('show');
    });
  
    // Close dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$dropdown.is(e.target) && $dropdown.has(e.target).length === 0) {
            $dropdownContent.removeClass('show');
        }
    });
  
    // Get current page path
    const currentPath = window.location.pathname;
    const isArabic = currentPath.startsWith('/ar/');
  
    // Set initial button text based on current language (short version)
    const shortText = isArabic ? 'Ar' : 'En';
    $dropdownBtn.html(`${shortText} <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><path d="M10.4116 5.20605L6.94113 8.67655L3.47064 5.20605" stroke="inherit" stroke-width="0.867623" stroke-linecap="round" stroke-linejoin="round"/></svg>`);
});

  // Animate On Scroll
  $(document).ready(function () {
    AOS.init({
      once: true,
      offset: 40,
      delay: 500,
      duration: 900,
    });
  });


  const testimonialSlider = new Swiper(".testimonial-slider", {
    centeredSlides: true,
    loop: true,
    speed: 600,
    preventInteractionOnTransition: true, // Prevents interaction during transition
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      beforeTransitionStart: function () {
        this.el.classList.add("is-transitioning");
      },
      transitionEnd: function () {
        this.el.classList.remove("is-transitioning");
      },
    },
    breakpoints: {
      1200: {
        slidesPerView: 4,
        spaceBetween: -172,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: -100,
      },
      767: {
        slidesPerView: 2,
        spaceBetween: -50,
      },
      576: {
        slidesPerView: 2,
        spaceBetween: -30,
      },
      0: {
        slidesPerView: 2,
        spaceBetween: -30,
      },
    },
  });

  new Swiper(".testimonial-slider-v2", {
    loop: false,
    speed: 600,
    slidesPerView: 1,
    spaceBetween: 10,
    fadeEffect: { crossFade: true },
    effect: "fade",
    autoplay: {
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
      delay: 3000,
    },
  });

  new Swiper(".testimonial-slider-v3", {
    loop: true,
    centeredSlides: true,
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 70,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1400: {
        spaceBetween: 92,
      },
      1200: {
        spaceBetween: 70,
      },
    },
  });

  let swiperReceivable = null;
  let swiperPricing = null;
  let swiperPopularBlog = null;

  function initReceivableSwiper() {
    swiperReceivable = new Swiper(".receivable-slider", {
      loop: true,
      speed: 600,
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  function initPricingSwiper() {
    swiperPricing = new Swiper(".pricing-slider", {
      loop: false,
      centeredSlides: true,
      speed: 800,
      slidesPerView: 1,
      spaceBetween: -48,
      preventInteractionOnTransition: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      on: {
        beforeTransitionStart: function () {
          this.el.classList.add("is-transitioning");
        },
        transitionEnd: function () {
          this.el.classList.remove("is-transitioning");
        },
      },
    });
  }

  // function for popular blog slider
  function initPopularBlogSwiper() {
    swiperPopularBlog = new Swiper(".popular-blog-slider", {
      loop: false,
      centeredSlides: true,
      speed: 900,
      slidesPerView: 1,
      spaceBetween: -40,

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  function checkWidth() {
    const isMobile = $(window).width() <= 992;

    // Check for receivable slider
    const $receivableSlider = $(".receivable-slider");
    if ($receivableSlider.length === 0) {
      if (swiperReceivable !== null) {
        swiperReceivable.destroy(true, true);
        swiperReceivable = null;
      }
    } else {
      const receivableSlides = $receivableSlider.find(".swiper-wrapper > div");
      if (isMobile) {
        receivableSlides.addClass("swiper-slide");

        if (swiperReceivable === null) {
          initReceivableSwiper();
        } else {
          swiperReceivable.update();
        }
      } else {
        receivableSlides.removeClass("swiper-slide");
        if (swiperReceivable !== null) {
          swiperReceivable.destroy(true, true);
          swiperReceivable = null;
        }
      }
    }

    // Check for pricing slider
    const $pricingSlider = $(".pricing-slider");
    if ($pricingSlider.length === 0) {
      if (swiperPricing !== null) {
        swiperPricing.destroy(true, true);
        swiperPricing = null;
      }
    } else {
      const pricingSlides = $pricingSlider.find(".swiper-wrapper > div");
      if (isMobile) {
        pricingSlides.addClass("swiper-slide");
        if (swiperPricing === null) {
          initPricingSwiper();
        } else {
          swiperPricing.update();
        }
      } else {
        pricingSlides.removeClass("swiper-slide");
        if (swiperPricing !== null) {
          swiperPricing.destroy(true, true);
          swiperPricing = null;
        }
      }
    }

    // Check for popular blog slider
    const $popularBlogSlider = $(".popular-blog-slider");
    if ($popularBlogSlider.length === 0) {
      if (swiperPopularBlog !== null) {
        swiperPopularBlog.destroy(true, true);
        swiperPopularBlog = null;
      }
    } else {
      const popularBlogSlides = $popularBlogSlider.find(
        ".swiper-wrapper > div"
      );
      if (isMobile) {
        popularBlogSlides.addClass("swiper-slide");
        if (swiperPopularBlog === null) {
          initPopularBlogSwiper();
        } else {
          swiperPopularBlog.update();
        }
      } else {
        popularBlogSlides.removeClass("swiper-slide");
        if (swiperPopularBlog !== null) {
          swiperPopularBlog.destroy(true, true);
          swiperPopularBlog = null;
        }
      }
    }
  }

  checkWidth();
  let resizeTimeout;
  $(window).resize(function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(checkWidth, 100);
  });

  // Counter
  if ($.isFunction($.fn.counterUp)) {
    $(".counter").counterUp({
      delay: 10,
      time: 2000,
    });
  }

  $(".feature-wrapper .feature-box").each(function (index) {
    $(this).on("click", function () {
      // Remove Class
      $(".feature-box").removeClass("active");
      $(".feature-content").removeClass("active");
      $(".feature-image").removeClass("active");

      // Add Class
      $(this).addClass("active");
      $(this).find(".feature-content").addClass("active");
      $("#image" + (index + 1)).addClass("active");
    });
  });
  // Pricing Plan
  const $monthlyBtn = $("#monthlyBtn");
  const $yearlyBtn = $("#yearlyBtn");
  const $monthlyPrices = $(".monthly-price");
  const $yearlyPrices = $(".yearly-price");
  const $pricePeriods = $(".price-period");

  const togglePricing = (isYearly) => {
    const $activeBtn = isYearly ? $yearlyBtn : $monthlyBtn;
    const $inactiveBtn = isYearly ? $monthlyBtn : $yearlyBtn;

    $activeBtn.addClass("active");
    $inactiveBtn.removeClass("active");

    $monthlyPrices.toggle(!isYearly);
    $yearlyPrices.toggle(isYearly);

    const newPeriod = isYearly ? "/ per year" : "/ per month";
    $pricePeriods.text(newPeriod);
  };

  $monthlyBtn.on("click", () => togglePricing(false));
  $yearlyBtn.on("click", () => togglePricing(true));

  $(document).ready(function () {
    $(".mobile-menu-triggered").on("click", function () {
      if ($(window).width() < 992) {
        $(".navigation-inner-wrapper").toggleClass("active");
      }
      return false; // Prevent default behavior
    });

    // Close Menu on Outside Click
    $("html, body").on("click", function () {
      if ($(window).width() < 992) {
        $(".navigation-inner-wrapper").removeClass("active");
      }
    });

    // Stop Propagation on Menu Click
    $(".navigation-inner-wrapper").on("click", function (event) {
      event.stopPropagation();
    });

    // Toggle Submenu
    $("nav li.menu-item-has-children > a").on("click", function () {
      if ($(window).width() < 992) {
        $(this).parent().siblings("li").children("ul").slideUp();
        $(this).parent().siblings("li").removeClass("active");
        $(this).parent().children("ul").slideToggle();
        $(this).parent().toggleClass("active");
        return false; // Prevent default behavior
      }
    });

    // Table Sticky
    const $tableHeader = $(".compare-table thead");
    const $table = $(".compare-table");

    // Check if the table and header exist
    if ($table.length && $tableHeader.length) {
      $(window).on("scroll", function () {
        const tableRect = $table[0].getBoundingClientRect();
        const tableBottom = tableRect.bottom;
        const headerHeight = $tableHeader.outerHeight();

        // Check if header is sticky
        if (tableRect.top <= 90) {
          $tableHeader.addClass("is-sticky");

          // Check if header has reached the bottom of the table
          if (tableBottom <= 90 + headerHeight) {
            $tableHeader.addClass("at-bottom");
          } else {
            $tableHeader.removeClass("at-bottom");
          }
        } else {
          $tableHeader.removeClass("is-sticky");
          $tableHeader.removeClass("at-bottom");
        }
      });
    }

    // Float Animation

    // Check if either type of elements exist
    if ($(".icon-box, .careers-hero-preview").length > 0) {
      const $floatingElements = $(".careers-hero-preview, .need_help-image");
      const $iconBoxElements = $(".icon-box");

      // .careers-hero-preview / .need_help-image elements settings
      $floatingElements.each(function (index) {
        $(this).data({
          speed: 0.3 + index * 0.1,
          initialPosition: $(this).offset().top,
        });
      });

      // Mouse hover behavior (move .icon-box elements)
      $iconBoxElements.on("mouseenter", function () {
        const $element = $(this);

        $(window).on("mousemove", function (e) {
          const mouseX = e.pageX;
          const mouseY = e.pageY;

          const elementOffset = $element.offset();
          const elementCenterX = elementOffset.left + $element.width() / 2;
          const elementCenterY = elementOffset.top + $element.height() / 2;

          const deltaX = mouseX - elementCenterX;
          const deltaY = mouseY - elementCenterY;

          const moveFactor = 1.5;
          const moveX = deltaX * moveFactor;
          const moveY = deltaY * moveFactor;

          $element.css({
            transform: `translate(${moveX}px, ${moveY}px)`,
            transition: "transform 0.5s ease-out",
          });
        });
      });

      // Remove mousemove event when mouse leaves the element
      $iconBoxElements.on("mouseleave", function () {
        const $element = $(this);

        $(window).off("mousemove"); // Stop following the mouse

        $element.css({
          transform: "translate(0, 0)",
          transition: "transform 0.5s ease-out",
        });
      });

      // Floating effect function for .careers-hero-preview
      function startFloating() {
        let time = Date.now() * 0.001;

        $floatingElements.each(function () {
          const $element = $(this);

          const amplitude = 10;
          const floatOffset = Math.sin(time + $(this).index()) * amplitude;

          $element.css("transform", `translateY(${floatOffset}px)`);
        });

        requestAnimationFrame(startFloating);
      }

      // floating effect for .careers-hero-preview
      startFloating();
    }
  });

  // Falling Object Animation
  if (typeof Matter !== "undefined") {
    const Engine = Matter.Engine,
      Render = Matter.Render,
      Runner = Matter.Runner,
      Bodies = Matter.Bodies,
      Composite = Matter.Composite,
      Mouse = Matter.Mouse,
      MouseConstraint = Matter.MouseConstraint;

    let engine, render, runner;
    let isAnimationStarted = false;
    let availableImageIndices = []; // Array to hold available image indices

    // Image configurations
    const imageConfigs = [
      {
        label: "Users Access",
        width: 250,
        height: 250,
        src: "assets/images/resources/drop-1.png",
      },
      {
        label: "Automate Finances",
        width: 360,
        height: 206,
        src: "assets/images/resources/drop-6.png",
      },
      {
        label: "Reports",
        width: 257,
        height: 190,
        src: "assets/images/resources/drop-4.png",
      },
      {
        label: "Connect",
        width: 259,
        height: 137,
        src: "assets/images/resources/drop-9.png",
      },
      {
        label: "Get Started",
        width: 149,
        height: 149,
        src: "assets/images/resources/drop-5.png",
      },
      {
        label: "Insights",
        width: 197,
        height: 120,
        src: "assets/images/resources/drop-3.png",
      },
      {
        label: "ArrowBox",
        width: 119,
        height: 119,
        src: "assets/images/resources/drop-2.png",
      },
      {
        label: "ArrowElipse",
        width: 115,
        height: 116,
        src: "assets/images/resources/drop-7.png",
      },
      {
        label: "AddElipse",
        width: 197,
        height: 120,
        src: "assets/images/resources/drop-8.png",
      },
    ];

    // Responsive scaling function
    function getResponsiveScale() {
      const width = window.innerWidth;
      if (width <= 575) return 0.38;
      if (width <= 767) return 0.5;
      if (width <= 993) return 0.6;
      if (width <= 1200) return 0.7;
      return 1;
    }

    // Initialize available image indices
    function resetAvailableImages() {
      availableImageIndices = Array.from(Array(imageConfigs.length).keys());
      // Shuffle the array to randomize the order
      for (let i = availableImageIndices.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [availableImageIndices[i], availableImageIndices[j]] = [
          availableImageIndices[j],
          availableImageIndices[i],
        ];
      }
    }

    function getNextImage() {
      if (availableImageIndices.length === 0) {
        resetAvailableImages();
      }
      return availableImageIndices.pop();
    }

    function createImageObject() {
      const scale = getResponsiveScale();
      const imageIndex = getNextImage();
      const config = imageConfigs[imageIndex];

      const width = config.width * scale;
      const height = config.height * scale;

      return Bodies.rectangle(
        Math.random() * (render.canvas.width - width) + width / 2,
        -100,
        width,
        height,
        {
          render: {
            sprite: {
              texture: config.src,
              xScale: scale,
              yScale: scale,
            },
          },
          restitution: 0.6,
          friction: 0.01,
          frictionAir: 0.001,
        }
      );
    }

    function initPhysics() {
      const container = document.getElementById("physics-container");
      const containerHeight = container.clientHeight;
      const containerWidth = container.clientWidth;

      engine = Engine.create();
      engine.gravity.y = 1;

      render = Render.create({
        element: container,
        engine: engine,
        options: {
          width: containerWidth,
          height: containerHeight,
          wireframes: false,
          background: "transparent",
        },
      });

      const ground = Bodies.rectangle(
        containerWidth / 2,
        containerHeight + 30,
        containerWidth,
        60,
        {
          isStatic: true,
          render: { fillStyle: "#f5f0ff" },
        }
      );

      const leftWall = Bodies.rectangle(
        -30,
        containerHeight / 2,
        60,
        containerHeight,
        {
          isStatic: true,
          render: { fillStyle: "#f5f0ff" },
        }
      );

      const rightWall = Bodies.rectangle(
        containerWidth + 30,
        containerHeight / 2,
        60,
        containerHeight,
        {
          isStatic: true,
          render: { fillStyle: "#f5f0ff" },
        }
      );

      const mouse = Mouse.create(render.canvas);
      const mouseConstraint = MouseConstraint.create(engine, {
        mouse: mouse,
        constraint: {
          stiffness: 0.2,
          render: {
            visible: false,
          },
        },
      });

      Composite.add(engine.world, [
        ground,
        leftWall,
        rightWall,
        mouseConstraint,
      ]);

      runner = Runner.create();
      Render.run(render);
      Runner.run(runner, engine);
    }

    function startAnimation() {
      if (!isAnimationStarted) {
        isAnimationStarted = true;
        resetAvailableImages(); // Reset and shuffle available images

        // Create all images
        imageConfigs.forEach((_, index) => {
          setTimeout(() => {
            const imageObject = createImageObject();
            Composite.add(engine.world, imageObject);
          }, index * 300); // Drop each image with a 300ms delay
        });
      }
    }

    document.addEventListener("DOMContentLoaded", () => {
      initPhysics();

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              startAnimation();
            }
          });
        },
        { threshold: 0.3 }
      );

      const physicsSection = document.querySelector(".physics-section");
      if (physicsSection) {
        observer.observe(physicsSection);
      } else {
        console.error("Element .physics-section not found");
      }

      // let resizeTimeout;
      // window.addEventListener("resize", () => {
      //   clearTimeout(resizeTimeout);
      //   resizeTimeout = setTimeout(() => {
      //     Composite.clear(engine.world);
      //     Runner.stop(runner);
      //     Render.stop(render);
      //     render.canvas.remove();

      //     isAnimationStarted = false;
      //     initPhysics();
      //     startAnimation();
      //   }, 250);
      // });
    });

    
  
  }
})(jQuery);
