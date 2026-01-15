<footer>
	<div class="cta-footer container" style="color: #FFF !important">
		<h2 style="color: #FFF !important">Create Professional Invoices. Get paid.</h2>
		<br>
		<div class="hero-buttons" style="display: flex;gap: 10px;justify-content: center;">
			<a href="https://play.google.com/store/apps/details?id=com.paylync.app" target="_blank">
				<img src="image/g-play-btn.png" width="180" alt="google play store button">
			</a>
			<a href="#">
				<img src="image/apple-app-store-btn.png" alt="app store button">
			</a>
		</div>
	</div>

	<div class="main-footer">
		<div class="container footer-grid">
			<div class="footer-col">
				<a href="https://paylync.com" class="logo" style="color: white; margin-bottom: 1rem; display:inline-block;">
					<img src="image/paylync-white-logo.png" width="110" class="br-0" alt="">
				</a>

				<p class="fs-16">"Love how easy it is to create invoices and get paid."</p>

				<!-- Social Icons (quote ke bilkul neeche) -->
				<div class="footer-social">
					<a class="social-link" href="https://www.facebook.com/profile.php?id=61578265875539" target="_blank" rel="noopener" aria-label="Facebook">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M22 12a10 10 0 1 0-11.5 9.9v-7H8v-3h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4H15.5c-1.2 0-1.5.7-1.5 1.4V12H18l-.7 3h-3.3v7A10 10 0 0 0 22 12z" />
						</svg>
					</a>

					<!-- X (Twitter) -->
					<a class="social-link" href="https://x.com/Paylync" target="_blank" rel="noopener" aria-label="X">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M18.9 2H22l-6.8 7.8L23 22h-6.2l-4.9-7.1L5.8 22H2l7.4-8.5L1 2h6.3l4.4 6.4L18.9 2zm-1.1 18h1.7L7.2 3.9H5.4L17.8 20z" />
						</svg>
					</a>

					<a class="social-link" href="https://www.linkedin.com/company/paylync" target="_blank" rel="noopener" aria-label="LinkedIn">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M6.94 6.5A2.44 2.44 0 1 1 7 1.62a2.44 2.44 0 0 1-.06 4.88zM2.5 22h4.9V8.2H2.5V22zM9.2 8.2h4.7v1.9h.1c.7-1.2 2.3-2.4 4.7-2.4 5 0 5.9 3.3 5.9 7.6V22h-4.9v-5.8c0-1.4 0-3.2-2-3.2s-2.3 1.5-2.3 3.1V22H9.2V8.2z" />
						</svg>
					</a>

					<a class="social-link" href="https://www.youtube.com/@paylync" target="_blank" rel="noopener" aria-label="YouTube">
						<svg viewBox="0 0 24 24" aria-hidden="true">
							<path d="M21.6 7.2a2.7 2.7 0 0 0-1.9-1.9C18 4.9 12 4.9 12 4.9s-6 0-7.7.4A2.7 2.7 0 0 0 2.4 7.2 28.6 28.6 0 0 0 2 12a28.6 28.6 0 0 0 .4 4.8 2.7 2.7 0 0 0 1.9 1.9c1.7.4 7.7.4 7.7.4s6 0 7.7-.4a2.7 2.7 0 0 0 1.9-1.9A28.6 28.6 0 0 0 22 12a28.6 28.6 0 0 0-.4-4.8z" />
							<path d="M10.2 15.3V8.7L15.9 12l-5.7 3.3z" fill="#0b0b0b" />
						</svg>
					</a>
				</div>
			</div>

			<div class="footer-col">
				<h4>Product</h4>
				<ul>
					<li><a href="https://paylync.com/invoice-generator" class="fs-16">Invoice Maker</a></li>
					<li><a href="https://paylync.com/extensions" class="fs-16" style="font-size: 15px;">QuickBooks Online Extension</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4>Company</h4>
				<ul>
					<li><a href="https://paylync.com/contact-us" class="fs-16">About</a></li>
					<li><a href="https://paylync.com/blog" class="fs-16">Blog</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4>Support</h4>
				<ul>
					<li><a href="#" class="fs-16">Help Center</a></li>
					<li><a href="https://paylync.com/contact-us" class="fs-16">Contact</a></li>
				</ul>
			</div>
		</div>

		<div class="container" style="margin-top: 3rem; border-top: 1px solid #333; padding-top: 1rem;">
			<p class="fs-14">&copy; 2025 PayLync. All rights reserved.</p>
		</div>
	</div>
</footer>

<!-- 
<script>
	(function() {
		// ===== 1) POLYFILL: crypto.randomUUID (important) =====
		// Freshchat uses crypto.randomUUID while opening; on HTTP/older contexts it may not exist.
		(function ensureRandomUUID() {
			try {
				if (typeof window.crypto === "undefined") return;

				if (typeof window.crypto.randomUUID === "function") return;

				window.crypto.randomUUID = function() {
					var rnds = new Uint8Array(16);

					if (window.crypto.getRandomValues) {
						window.crypto.getRandomValues(rnds);
					} else {
						for (var i = 0; i < 16; i++) rnds[i] = Math.floor(Math.random() * 256);
					}

					// RFC4122 v4
					rnds[6] = (rnds[6] & 0x0f) | 0x40;
					rnds[8] = (rnds[8] & 0x3f) | 0x80;

					var hex = [];
					for (var j = 0; j < 16; j++) hex.push((rnds[j] + 0x100).toString(16).slice(1));

					return (
						hex[0] + hex[1] + hex[2] + hex[3] + "-" +
						hex[4] + hex[5] + "-" +
						hex[6] + hex[7] + "-" +
						hex[8] + hex[9] + "-" +
						hex[10] + hex[11] + hex[12] + hex[13] + hex[14] + hex[15]
					);
				};
			} catch (e) {}
		})();

		// ===== 2) INJECT Freshchat =====
		var FW_SRC = "https://fw-cdn.com/15014606/6493296.js";
		var WIDGET_ID = "eae06dcd-146a-4ca7-adb0-bb70e81f2eca"; // ✅ your new widget id

		function injectFreshchat() {
			if (document.querySelector('script[data-freshchat="1"]')) return;

			var s = document.createElement("script");
			s.src = FW_SRC;
			s.async = true;
			s.setAttribute("chat", "true");
			s.setAttribute("widgetId", WIDGET_ID);
			s.setAttribute("data-freshchat", "1");

			document.head.appendChild(s);
		}

		window.addEventListener("load", injectFreshchat);
	})();
</script>

<style>
	/* ✅ only keep launcher visible; DO NOT force open panel size */
	#fc_frame {
		z-index: 2147483647 !important;
	}

	/* closed state launcher size (when normal) */
	#fc_frame.fc-widget-normal {
		display: block !important;
		visibility: visible !important;
		opacity: 1 !important;

		/* width: 72px !important;
		height: 72px !important;
		min-width: 72px !important;
		min-height: 72px !important; */

		right: 15px !important;
		bottom: 15px !important;
		position: fixed !important;
	}

	/* ✅ when open, let Freshchat control the size */
	#fc_frame.h-open-container,
	#fc_frame.fc-open,
	#fc_frame.h-open-container.fc-open {
		width: auto !important;
		height: auto !important;
		min-width: unset !important;
		min-height: unset !important;
	}

	#fc_frame.fc_dn,
	#fc_frame.fc-widget-normal.fc_dn {
		height: 100% !important;
		min-height: 100% !important;
		min-width: 100% !important;
		opacity: 1 !important;
		width: 100% !important;
	}
</style>
 -->

 <!-- working widget but loading cont -->


<style>
	/* Keep widget above everything */
	#fc_frame {
		z-index: 2147483647 !important;
	}

	/* IMPORTANT:
     If Freshchat keeps launcher hidden with fc_dn, show it as a 72px bubble.
     Do NOT use 100% here — it breaks open panel behavior. */
	#fc_frame.fc_dn.fc-widget-normal,
	#fc_frame.fc-widget-normal.fc_dn {
		display: block !important;
		visibility: visible !important;
		opacity: 1 !important;

		width: 72px !important;
		height: 72px !important;
		min-width: 72px !important;
		min-height: 72px !important;

		right: 15px !important;
		bottom: 15px !important;
		position: fixed !important;
		z-index: 2147483647 !important;
		pointer-events: auto !important;
	}
</style>

<script>
	(function() {
		var FW_SRC = "https://fw-cdn.com/15062622/6521061.js";
		var WIDGET_ID = "c0d796fc-ca9c-4547-bc75-e7ca0bdf9a07";
		var LAUNCHER_SIZE = 72;

		// 1) Polyfill (only if missing)
		try {
			if (window.crypto && typeof window.crypto.randomUUID !== "function") {
				window.crypto.randomUUID = function() {
					var rnds = new Uint8Array(16);
					if (crypto.getRandomValues) crypto.getRandomValues(rnds);
					else
						for (var i = 0; i < 16; i++) rnds[i] = Math.floor(Math.random() * 256);

					rnds[6] = (rnds[6] & 0x0f) | 0x40;
					rnds[8] = (rnds[8] & 0x3f) | 0x80;

					var hex = [];
					for (var j = 0; j < 16; j++) hex.push((rnds[j] + 0x100).toString(16).slice(1));

					return (
						hex[0] + hex[1] + hex[2] + hex[3] + "-" +
						hex[4] + hex[5] + "-" +
						hex[6] + hex[7] + "-" +
						hex[8] + hex[9] + "-" +
						hex[10] + hex[11] + hex[12] + hex[13] + hex[14] + hex[15]
					);
				};
			}
		} catch (e) {}

		// 2) Inject Freshchat ONCE
		function inject() {
			if (window.__FW_WIDGET_INJECTED__) return;
			window.__FW_WIDGET_INJECTED__ = true;

			// if someone already placed the original embed, don't inject again
			var already = document.querySelector('script[src="' + FW_SRC + '"]');
			if (already) return;

			var s = document.createElement("script");
			s.src = FW_SRC;
			s.async = true;

			// Cloudflare Rocket Loader safe
			s.setAttribute("data-cfasync", "false");

			s.setAttribute("chat", "true");
			s.setAttribute("widgetId", WIDGET_ID);
			document.body.appendChild(s);
		}

		function isOpen(frame) {
			// Freshworks uses these classes in open state
			return frame.classList.contains("h-open-container") ||
				frame.classList.contains("fc-open") ||
				frame.classList.contains("fc-widget-open");
		}

		// 3) Force launcher visible ONLY when closed/hidden
		function forceLauncherVisible() {
			var frame = document.getElementById("fc_frame");
			if (!frame) return;

			if (isOpen(frame)) return; // do not fight open panel sizing

			// if Freshchat hides it inline, fix it
			if (frame.style.display === "none") frame.style.display = "block";

			frame.style.visibility = "visible";
			frame.style.opacity = "1";
			frame.style.pointerEvents = "auto";
			frame.style.position = "fixed";
			frame.style.right = "15px";
			frame.style.bottom = "15px";
			frame.style.zIndex = "2147483647";

			// stable launcher size
			frame.style.width = LAUNCHER_SIZE + "px";
			frame.style.height = LAUNCHER_SIZE + "px";
			frame.style.minWidth = LAUNCHER_SIZE + "px";
			frame.style.minHeight = LAUNCHER_SIZE + "px";

			// remove hidden class
			if (frame.classList.contains("fc_dn")) frame.classList.remove("fc_dn");
		}

		// 4) When open, remove forced size so Freshchat can render panel properly
		function releaseOpenSizing() {
			var frame = document.getElementById("fc_frame");
			if (!frame) return;

			// let Freshchat control open panel
			frame.style.width = "";
			frame.style.height = "";
			frame.style.minWidth = "";
			frame.style.minHeight = "";
		}

		// 5) Observe and auto-fix if it goes hidden again
		function observeFrame() {
			var frame = document.getElementById("fc_frame");
			if (!frame || frame.__OBS__) return;
			frame.__OBS__ = true;

			new MutationObserver(function() {
				if (!isOpen(frame) && (frame.classList.contains("fc_dn") || frame.style.display === "none")) {
					forceLauncherVisible();
				}
			}).observe(frame, {
				attributes: true,
				attributeFilter: ["class", "style"]
			});
		}

		// 6) Boot
		function boot() {
			inject();

			var tries = 0;
			var t = setInterval(function() {
				tries++;

				forceLauncherVisible();
				observeFrame();

				if (window.fcWidget) {
					try {
						// make sure launcher is shown
						window.fcWidget.show();

						// hook open/close
						window.fcWidget.on("widget:opened", function() {
							releaseOpenSizing();
						});
						window.fcWidget.on("widget:closed", function() {
							forceLauncherVisible();
						});
					} catch (e) {}
				}

				// stop polling after it exists and we have applied visibility
				if (document.getElementById("fc_frame") && tries > 60) clearInterval(t);
				if (tries > 300) clearInterval(t);
			}, 50);
		}

		if (document.readyState === "complete") boot();
		else window.addEventListener("load", boot);
	})();
</script>


<style>
	.btn {
		display: inline-block;
		padding: 12px 0px;
		border-radius: 6px;
		font-weight: 600;
		font-size: 0.95rem;
		cursor: pointer;
		transition: all 0.3s ease;
	}

	.playstorewhitebtn {
		border-radius: 11px;
	}

	.footer-social {
		margin-top: 10px;
		display: flex;
		gap: 12px;
		align-items: center;
	}

	.footer-social .social-link {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 34px;
		height: 34px;
		border-radius: 10px;
		background: rgba(255, 255, 255, 0.08);
		transition: transform 0.2s ease, background 0.2s ease, opacity 0.2s ease;
		opacity: 0.95;
	}

	.footer-social .social-link:hover {
		transform: translateY(-2px);
		background: rgba(255, 255, 255, 0.14);
		opacity: 1;
	}

	.footer-social svg {
		width: 18px;
		height: 18px;
		fill: #fff;
		display: block;
	}
</style>