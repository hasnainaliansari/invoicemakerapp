<div class="hero-image">
	<div class="page-wrapper">
		<div class="page-wrapper">
			<div class="hide">
				<div class="global-styles w-embed">
					<style>
					.padding-horizontal {
						padding-top: 0rem !important;
						padding-bottom: 0rem !important;
					}
					
					.margin-vertical {
						margin-right: 0rem !important;
						margin-left: 0rem !important;
					}
					
					.padding-vertical {
						padding-right: 0rem !important;
						padding-left: 0rem !important;
					}
					
					.video-popup-overlay {
						opacity: 0;
						visibility: hidden;
						transition: opacity 0.4s ease, visibility 0.4s ease;
					}
					
					.video-popup-overlay.visible {
						opacity: 1;
						visibility: visible;
					}
					</style>
				</div>
			</div>
            <div class="home-hero_padding">
                <div class="container-1200px">
                    <div class="video-thumbnail-wrapper">
                        <div class="video-embed w-embed w-iframe">
                            <video id="myVideo" autoplay muted style="width: 100%;">
                                <source src="video/invoice-maker-by-paylync-play-store.mp4" style="top:0; left:0; width:590px; height: 330px" type="video/mp4"> </video>
                            <script>
                            const video = document.getElementById('myVideo');
                            video.addEventListener('ended', () => {
                                video.currentTime = 0;
                                video.play();
                            });
                            </script>
                            <style>
                            .video-thumbnail-iframe {
                                overflow: hidden;
                            }
                            </style>
                        </div>
                        <div class="open-video-popup-wrapper w-embed">
                            <button class="open-video-popup" aria-label="play-website-video" data-video-url="video/invoice-maker-by-paylync-play-store.mp4"></button>
                        </div>
                    </div>
                </div>
            </div>
			<div class="video-popup-overlay">
				<div class="video-popup-embed w-embed w-iframe">
					<iframe id="video-popup-iframe" src="" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="" style="border-radius: 12px;"> </iframe>
				</div>
				<div id="video-popup-close" class="close-popup"></div>
			</div>
		</div>
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			const openButtons = document.querySelectorAll(".open-video-popup");
			const popupOverlay = document.querySelector(".video-popup-overlay");
			const popupIframe = document.getElementById("video-popup-iframe");
			const closePopupBtn = document.getElementById("video-popup-close");
			const wrappers = document.querySelectorAll(".video-thumbnail-wrapper");
			const thumbnailPlayers = [];

			function buildThumbnail(wrapper) {
				const videoId = wrapper.dataset.videoId;
				const imageWrapper = wrapper.querySelector(".video-thumbnail-image-wrapper");
				if(!videoId || !imageWrapper) return;
				const iframe = document.createElement("iframe");
				iframe.className = "video-thumbnail-iframe";
				iframe.setAttribute("frameborder", "0");
				iframe.setAttribute("allow", "autoplay; fullscreen; picture-in-picture");
				iframe.setAttribute("allowfullscreen", "");
				iframe.setAttribute("width", "100%");
				iframe.setAttribute("height", "100%");
				imageWrapper.innerHTML = "";
				imageWrapper.appendChild(iframe);
				const player = new Vimeo.Player(iframe);
				player.ready().then(() => player.setMuted(true).then(() => player.play())).catch(() => {});
				thumbnailPlayers.push(player);
			}
			wrappers.forEach(buildThumbnail);

			function pauseThumbnails() {
				thumbnailPlayers.forEach((p) => {
					p.pause().catch(() => {});
				});
			}

			function resumeThumbnails() {
				thumbnailPlayers.forEach((p) => {
					p.setMuted(true).then(() => p.play()).catch(() => {});
				});
			}
			openButtons.forEach((button) => {
				button.addEventListener("click", function() {
					pauseThumbnails();
					const videoUrl = button.getAttribute("data-video-url");
					popupIframe.src = `${videoUrl}?autoplay=1&muted=0&controls=1&playsinline=1`;
					popupOverlay.classList.add("visible");
					document.body.style.overflow = "hidden";
				});
			});

			function closePopup() {
				popupOverlay.classList.remove("visible");
				setTimeout(() => {
					popupIframe.src = "";
					document.body.style.overflow = "";
					resumeThumbnails();
				}, 400);
			}
			closePopupBtn.addEventListener("click", closePopup);
			popupOverlay.addEventListener("click", function(e) {
				if(e.target === popupOverlay) closePopup();
			});
			document.addEventListener("keydown", (e) => {
				if(e.key === "Escape" && popupOverlay.classList.contains("visible")) {
					closePopup();
				}
			});
		});
		</script>
	</div>