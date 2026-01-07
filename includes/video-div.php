<div class="hero-image">
  <div class="page-wrapper">
    <div class="page-wrapper">
      <div class="hide">
        <div class="global-styles w-embed">
          <style>
            .padding-horizontal { padding-top: 0rem !important; padding-bottom: 0rem !important; }
            .margin-vertical { margin-right: 0rem !important; margin-left: 0rem !important; }
            .padding-vertical { padding-right: 0rem !important; padding-left: 0rem !important; }

            .video-thumbnail-wrapper { position: relative; }

            /* Overlay button (stays on top for toggle) */
            .open-video-inline{
              position:absolute;
              inset:0;
              width:100%;
              height:100%;
              border:0;
              background:transparent;
              cursor:pointer;
              z-index:5;
            }

            /* Show play icon only when NOT playing */
            .video-thumbnail-wrapper.is-playing .open-video-inline::after,
            .video-thumbnail-wrapper.is-playing .open-video-inline::before{
              display:none;
            }

            /* Play icon */
            .open-video-inline::after{
              content:"";
              position:absolute;
              left:50%;
              top:50%;
              transform:translate(-50%,-50%);
              width:72px;
              height:72px;
              border-radius:999px;
              background:rgba(0,0,0,0.55);
              backdrop-filter: blur(2px);
            }
            .open-video-inline::before{
              content:"";
              position:absolute;
              left:50%;
              top:50%;
              transform:translate(calc(-50% + 4px), -50%);
              width:0;
              height:0;
              border-left:18px solid #fff;
              border-top:12px solid transparent;
              border-bottom:12px solid transparent;
              z-index:6;
            }
          </style>
        </div>
      </div>

      <div class="home-hero_padding">
        <div class="container-1200px">
          <div class="video-thumbnail-wrapper" id="videoWrap">
            <div class="video-embed w-embed w-iframe">
              <video
                id="myVideo"
                muted
                playsinline
                preload="metadata"
                style="width:100%; border-radius:12px; display:block;"
              >
                <source src="video/invoice-maker-by-paylync-play-store.mp4" type="video/mp4">
              </video>
            </div>

            <div class="open-video-popup-wrapper w-embed">
              <button class="open-video-inline" id="playInlineBtn" aria-label="play-website-video"></button>
            </div>
          </div>
        </div>
      </div>

      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const video = document.getElementById("myVideo");
          const wrap  = document.getElementById("videoWrap");
          const btn   = document.getElementById("playInlineBtn");

          // Ensure it never autoplay
          video.pause();
          video.currentTime = 0;
          video.autoplay = false;
          video.removeAttribute("autoplay");

          // Keep controls off until first play (optional)
          video.controls = false;
          video.removeAttribute("controls");

          function showPlayState() {
            wrap.classList.remove("is-playing");
          }

          function showPlayingState() {
            wrap.classList.add("is-playing");
          }

          async function playVideo() {
            try {
              video.muted = false; // enable sound on user click
              video.controls = true;
              video.setAttribute("controls", "controls");

              await video.play();
              showPlayingState();
            } catch (e) {
              // fallback if unmuted play blocked
              video.muted = true;
              video.controls = true;
              video.setAttribute("controls", "controls");
              try { await video.play(); } catch (_) {}
              showPlayingState();
            }
          }

          function pauseVideo() {
            video.pause();
            showPlayState();
          }

          // Toggle on overlay button click
          btn.addEventListener("click", function () {
            if (video.paused || video.ended) {
              playVideo();
            } else {
              pauseVideo();
            }
          });

          // If video ends, show button again (instead of auto-loop)
          video.addEventListener("ended", () => {
            video.currentTime = 0;
            showPlayState();
          });

          // If user pauses via controls, show button
          video.addEventListener("pause", () => {
            if (!video.ended) showPlayState();
          });

          // If user plays via controls, hide icon
          video.addEventListener("play", () => {
            showPlayingState();
          });
        });
      </script>
    </div>
  </div>
</div>
