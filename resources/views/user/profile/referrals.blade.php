  <main class="referral-wrapper">
      <div class="page-header">
          <h1>Referral <span>Program</span></h1>
          <p>Invite new members using your unique link and earn
              commissions from their deposits across multiple levels.</p>
      </div>

      <div class="referral-main-grid">
          <div class="referral-link-card">
              <div class="referral-link-content">
                  <h3>Your Unique Referral Link</h3>
                  <div class="ref-link-wrapper">
                      <span
                          class="ref-link">https://temining.cc/?ref=aas098</span>
                      <button class="btn-copy"
                          onclick="copyToClipboard(this, 'https://temining.cc/?ref=aas098')">Copy</button>
                  </div>
                  <div class="stats-grid">
                      <div class="stat-card">
                          <div class="label">Total Referrals</div>
                          <div class="value">0</div>
                      </div>
                      <div class="stat-card">
                          <div class="label">Active Referrals</div>
                          <div class="value">0</div>
                      </div>
                      <div class="stat-card">
                          <div class="label">Total Earned</div>
                          <div class="value accent">0.00</div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="inviter-card">
              <div class="inviter-icon">🤝</div>
              <div class="inviter-label">Your Inviter</div>
              <div class="inviter-name">No Sponsor</div>
          </div>
      </div>
      <section class="ops-card">
          <div class="card-header">
              <h3>My Networks</h3>
          </div>

          <div class="ops-filter">
              <a class="active" href="{{route('user.referral-team')}}">Direct Team</a>
              <a class="" href="{{route('user.left-team')}}">Left Team</a>
              <a class="" href="{{route('user.right-team')}}">Right Team</a>
              <a class="" href="{{route('user.tree-view')}}">Geonology Tree</a>
              <!-- <a class="" href="?type=referrals">Referrals</a>  -->
          </div>

          <ul class="ops-list">

              <li class="tx-empty">No operations yet.</li>
          </ul>
          <style>
              .ops-card,
              .dashboard-card {
                  background: #fff;
                  border: 1px solid #e0e1e2;
                  border-radius: 20px;
                  padding: 16px;
                  margin-top: 16px;
              }

              .card-header {
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                  margin-bottom: 8px;
              }

              .card-header .right a,
              .card-header a {
                  text-decoration: none;
                  color: #111827;
                  border: 1px solid #e0e1e2;
                  padding: 6px 10px;
                  border-radius: 10px;
              }

              .ops-filter {
                  display: flex;
                  flex-wrap: wrap;
                  gap: 8px;
                  margin: 6px 0 12px;
              }

              .ops-filter a {
                  padding: 8px 12px;
                  border: 1px solid #e0e1e2;
                  border-radius: 12px;
                  text-decoration: none;
                  color: var(--dark-slate-grey);
                  background: #fff;
              }

              .ops-filter a.active {
                  border-color: var(--sandy-brown);
                  color: #000;
                  box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
              }
          </style>
      </section>
      <!-- <section class="section-card">
                <h3>Premium Partner Program</h3>
                <div class="premium-levels-grid">
                    <div class="premium-card silver">
                        <div class="premium-header">
                            <div class="premium-icon">🛡️</div>
                            <div>
                                <h4 class="premium-title">Silver Partner</h4>
                                <div class="premium-benefits">Commission: 8% /
                                    3% / 1% <br> 100 USD bonus</div>
                            </div>
                        </div>
                        <div>
                            <div class="progress-info">
                                <span>0.00 / 10000.00</span>
                                <span>0%</span>
                            </div>
                            <div class="progress-bar-container">
                                <div class="progress-bar"
                                    style="width: 0%;"></div>
                            </div>
                            <p class="progress-left"><span>10000.00</span> left
                                to achieve this status</p>

                        </div>
                    </div>
                    <div class="premium-card gold">
                        <div class="premium-header">
                            <div class="premium-icon">🌟</div>
                            <div>
                                <h4 class="premium-title">Gold Partner</h4>
                                <div class="premium-benefits">Commission: 10% /
                                    3% / 1% / 1% <br> 500 USD bonus</div>
                            </div>
                        </div>
                        <div>
                            <div class="progress-info">
                                <span>0.00 / 25000.00</span>
                                <span>0%</span>
                            </div>
                            <div class="progress-bar-container">
                                <div class="progress-bar"
                                    style="width: 0%;"></div>
                            </div>
                            <p class="progress-left"><span>25000.00</span> left
                                to achieve this status</p>

                        </div>
                    </div>
                    <div class="premium-card platinum">
                        <div class="premium-header">
                            <div class="premium-icon">💎</div>
                            <div>
                                <h4 class="premium-title">Platinum Partner</h4>
                                <div class="premium-benefits">Commission: 12% /
                                    3% / 1% / 1% / 1% <br> 5000 USD bonus</div>
                            </div>
                        </div>
                        <div>
                            <div class="progress-info">
                                <span>0.00 / 100000.00</span>
                                <span>0%</span>
                            </div>
                            <div class="progress-bar-container">
                                <div class="progress-bar"
                                    style="width: 0%;"></div>
                            </div>
                            <p class="progress-left"><span>100000.00</span> left
                                to achieve this status</p>

                        </div>
                    </div>
                </div>
            </section> -->

      <section class="section-card">
          <h3>Standard Commission Rates</h3>
          <div class="levels-grid">
              <div class="level-card">
                  <div class="level-title">Level 1</div>
                  <div class="level-percent">7%</div>
                  <div class="level-description">
                      From deposits of your direct referrals. </div>
              </div>
              <div class="level-card">
                  <div class="level-title">Level 2</div>
                  <div class="level-percent">2%</div>
                  <div class="level-description">
                      From your referrals' referrals. </div>
              </div>
              <div class="level-card">
                  <div class="level-title">Level 3</div>
                  <div class="level-percent">1%</div>
                  <div class="level-description">
                      From the 3rd line of your structure. </div>
              </div>
          </div>
      </section>

      <section class="section-card">
          <h3>Your Referrals (Level 1)</h3>
          <div class="referrals-table-wrapper">
              <table class="referrals-table">
                  <thead>
                      <tr>
                          <th>Username</th>
                          <th>Registration Date</th>
                          <th>Total Deposits</th>
                          <th>Your Commission</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td colspan="4"
                              style="text-align:center; color: var(--text-muted); padding: 20px;">
                              You have no referrals on this level yet.
                          </td>
                      </tr>
                  </tbody>

              </table>
          </div>
      </section>

      <!-- <section class="section-card">
                <h3>Promotional Banners</h3>

                <div class="banners-grid banners-grid-tight">
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">468×60</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 468 / 60;">
                            <div class="ar-fallback"
                                style="padding-top: 12.8205%;"></div>
                            <img src="../banners/468.gif" alt="Banner 468×60"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/468.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/468.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/468.gif&quot; width=&quot;468&quot; height=&quot;60&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">728×90</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 728 / 90;">
                            <div class="ar-fallback"
                                style="padding-top: 12.3626%;"></div>
                            <img src="../banners/728.gif" alt="Banner 728×90"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/728.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/728.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/728.gif&quot; width=&quot;728&quot; height=&quot;90&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">1200×150</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 1200 / 150;">
                            <div class="ar-fallback"
                                style="padding-top: 12.5%;"></div>
                            <img src="../banners/1200.gif" alt="Banner 1200×150"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/1200.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/1200.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/1200.gif&quot; width=&quot;1200&quot; height=&quot;150&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">250×250</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 250 / 250;">
                            <div class="ar-fallback"
                                style="padding-top: 100%;"></div>
                            <img src="../banners/250.gif" alt="Banner 250×250"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/250.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/250.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/250.gif&quot; width=&quot;250&quot; height=&quot;250&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">150×150</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 150 / 150;">
                            <div class="ar-fallback"
                                style="padding-top: 100%;"></div>
                            <img src="../banners/150.gif" alt="Banner 150×150"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/150.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/150.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/150.gif&quot; width=&quot;150&quot; height=&quot;150&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                    <div class="banner-card nice">
                        <div class="banner-head">
                            <div class="banner-size">
                                <span class="badge">125×125</span>
                            </div>
                            <div class="banner-ext">
                                <span class="badge soft">GIF</span>
                            </div>
                        </div>

                        <div class="banner-preview"
                            style="aspect-ratio: 125 / 125;">
                            <div class="ar-fallback"
                                style="padding-top: 100%;"></div>
                            <img src="../banners/125.gif" alt="Banner 125×125"
                                loading="lazy" onerror="this.style.opacity=0.3">
                        </div>

                        <div class="banner-actions">
                            <button class="btn-copy subtle"
                                onclick="copyToClipboard(this, '../banners/125.gif')">Copy
                                URL</button>
                            <a class="btn-link subtle" href="../banners/125.gif"
                                download>Download</a>
                        </div>

                        <div class="banner-code-wrapper">
                            <input type="text" class="banner-code" readonly
                                value="&lt;a href=&quot;https://temining.cc/?ref=aas098&quot;&gt;&lt;img src=&quot;../banners/125.gif&quot; width=&quot;125&quot; height=&quot;125&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;">
                            <button class="btn-copy"
                                onclick="copyToClipboard(this, this.previousElementSibling.value)">Copy
                                HTML</button>
                        </div>
                    </div>
                </div>
            </section> -->

  </main>

  <script>
      function copyToClipboard(buttonElement, textToCopy) {
          navigator.clipboard.writeText(textToCopy).then(() => {
              const originalText = buttonElement.innerText;
              buttonElement.innerText = 'Copied!';
              setTimeout(() => {
                  buttonElement.innerText = originalText;
              }, 2000);
          }).catch(err => {
              console.error('Failed to copy text: ', err);
          });
      }
  </script>

  </body>

  </html>