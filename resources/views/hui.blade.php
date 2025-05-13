@extends("layouts.website")

@push('styles')
<link href="{{ asset('styleguide.css') }}" rel="stylesheet">
@endpush

@section("content")
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-12">
        <aside class="topic-list-container">
          <h4 class="ml-2">Topics</h4>
          <ul class="topic-list">
            <li class="active"><a href="#tags">Tags</a></li>
            <li><a href="#callstoaction">Calls To Action</a></li>
            <li><a href="#maxtitles">Max Titles</a></li>
            <li><a href="#palette">Color Palette</a></li>
          </ul>
        </aside>
      </div>
      <div class="col-md-9 col-sm-8 col-12">
        <section class="topic-content">
          <div class="topic-row">
            <div>
              <h1 id="tags">Tags</h1>
              <p>These are the tags that appear on various post cards, and individual post pages. Anywhere we need mutliple secondary categoires and quantifiers.</p>
              <p>Making key topics visible AND interactive is such an important part of blogging that we paid extra special care to their appearnce and functionality.</p>
            </div>
            <div>
              {!!  \App\Helpers\Typography::phikiHighlight('<a href="#" class="punkbtn" role="button">primary</a>', 'plain') !!}

              <p><code>.punkbtn</code>. Thats all you need to apply to link elements to make the magic happen.</p>

            </div>
            <div class="mt-5 example-box">
              <div class="row">
                <div class="col-4">
                  <h6 class="text-white">punkbtn, v2, shadow</h6>
                </div>
                 <div class="col-8">
                  <h6 class="text-white">btn cyber-btn btn-sm</h6>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <a href="#" class="punkbtn">cyber punk</a>
                  <div class="spacer"></div>
                  <a href="#" class="punkbtn v2">version 2</a>
                  <div class="spacer"></div>
                  <div class="d-inline-block">
                    <div class="btn-hover-shadow-1">
                      <a href="#" class="punkbtn">cyber shadow</a>
                    </div>
                  </div>
                  <div class="spacer"></div>
                </div>
                <div class="col-8">
                  <a href="#" class="btn btn-primary cyber-btn" role="button">primary</a>

                  <a href="#" class="btn btn-primary btn-sm cyber-btn" role="button">small</a>
                  <div class="spacer"></div>
                  <a href="#" class="btn btn-success cyber-btn" role="button">success</a>

                  <a href="#" class="btn btn-danger btn-sm cyber-btn" role="button">danger small</a>
                  <div class="spacer"></div>

                  <div class="d-inline-block">
                    <div class="btn-hover-shadow-1">
                      <a href="#" class="btn btn-primary cyber-btn" role="button">shadow</a>
                    </div>
                  </div>
                  <div class="d-inline-block ml-2">
                    <div class="btn-hover-shadow-1">
                      <a href="#" class="btn btn-primary btn-sm cyber-btn" role="button">shadow small</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="topic-row">
            <div>
              <h1 id="callstoaction" class="mb-0">Calls to Action</h1>
              <p class="mt-0">These large and in charge buttons pull user focus and promote interactions! How could you not want to click something this frickin cool?!</p>
              <p>There are a few different versions of the CTA buttons to pick from. </p>
            </div>
            <div>
              {!! \App\Helpers\Typography::phikiHighlight('<div class="sqbtn sqbtn-danger">
  <button class="sqbtn-main"><span>SQBTN DANGER</span></button>
</div>', 'plain') !!}
              <p><code>.sqbtn</code> requires a child element of <code>.sqbtn-main</code> to render correctly.</p>
            </div>
            <div>
              {!! \App\Helpers\Typography::phikiHighlight('<a href="/" class="pgbtn pgbtn-primary">PolyBtn</a>', 'plain') !!}
              <p><code>.pgbtn</code>. Is a bit simplier, that one class is all you need to make the magic happen.</p>
            </div>
            <div class="example-box">
              <div class="row mt-3">
                <div class="col">
                  <h6 class="text-white mb-4">Polygon Button <code>.pgbtn</code></h6>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-4">
                  <a href="/" class="pgbtn pgbtn-primary">PolyBtn</a>
                  <div class="spacer"></div>
                  <a href="/" class="pgbtn pgbtn-info">PG Info</a>

                  <div class="spacer"></div>
                </div>
                <div class="col-8">
                  <div class="d-inline-block">
                    <div class="pgbtn-shadow">
                      <a href="/" class="pgbtn pgbtn-primary">PRIMARY</a>
                    </div>
                  </div>
                  <div class="d-inline-block ml-3">
                    <div class="pgbtn-shadow">
                      <a href="/" class="pgbtn pgbtn-secondary text-black">secondary</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="container-fluid no-gutters">
                    <div class="row">
                      <div class="col-6">
                        <div class="sqbtn sqbtn-warning">
                          <button class="sqbtn-main"><span>SQBTN WARN</span></button>
                        </div>
                        <div class="sqbtn sqbtn-danger">
                          <button class="sqbtn-main"><span>SQBTN DANGER</span></button>
                        </div>
                      </div>
                      <div class="col-6">
                        <p class="mt-3 text-body text-white">This Call to Action Button does not have a small size</p>
                        <p class="mt-3 text-body text-white">In also REQUIRES you use the <code>button</code> element, NOT an <code>a href</code></p>
                        <div class="sqbtn sqbtn-info">
                          <button class="sqbtn-main"><span>SQBTN 2</span></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="spacer"></div>
                  <div class="container-fluid no-gutters">
                    <div class="row">
                      <div class="col">
                        <h6 class="text-white mb-4">Areas of Interest <code>aoibtn</code></h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <a class="aoibtn mr-3">
                          <div class="button">
                            AOI BTN
                          </div>
                        </a>
                        <a class="aoibtn aoibtn-sm aoibtn-info">
                          <div class="button">
                            AOI SMALL
                          </div>
                        </a>
                      </div>
                      <div class="col-6">
                        <a class="aoibtn aoibtn-sm mr-3">
                          <div class="button">
                            AOI SMALL
                          </div>
                        </a>
                        <a class="aoibtn aoibtn-sm aoibtn-success">
                          <div class="button">
                            SUCCESS
                          </div>
                        </a>
                        <a class="aoibtn aoibtn-sm aoibtn-warning mx-3">
                          <span class="button">
                            WARNING
                          </span>
                        </a>
                        <a class="aoibtn aoibtn-sm aoibtn-primary mt-3">
                          <span class="button">
                            PRIMARY
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="spacer my-3"></div>
                  <div class="container-fluid no-gutters">
                    <div class="row">
                      <div class="col-6">
                        <h6 class="text-white h6">CPUBTN</h6>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="cpubtn" style="--color:#f1153e;--border:2px;--slant:.5em">CPUBTN 1</button>
                      </div>
                      <div class="col-6">
                        <button class="cpubtn cpubtn-success" style="--border:1px;--slant:.25em">CPUBTN 1</button>
                        <button class="cpubtn cpubtn-warning cpubtn-sm mt-3" style="--border:1px;--slant:.25em">CPUBTN 1 SM</button>
                        <button class="cpubtn cpubtn-primary cpubtn-sm mt-3" style="--border:1px;--slant:.25em">CPUBTN 1 SM</button>
                      </div>
                    </div>
                  </div>

                  <div class="spacer"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="topic-row">
            <div>
              <h1 id="maxtitles">Maximium Titles</h1>
              <p>using a javascript package we can generate very large 1 line 'max titles'. Simple apply one of these classes to whatever element you want maximized. Fit text will produce a 'smaller' title as it has a lower max size value.</p>
              <ul>
                <li class="mb-3"><code>.fit-text</code></li>
                <li><code>.fit-title</code></li>
              </ul>
              <div>
                {!! \App\Helpers\Typography::phikiHighlight('<h1 class="fit-title">Test Fit Title</h1>', 'plain') !!}
              </div>
              <div class="example-box edgy">
                <h1 class="fit-title">Test Fit Title</h1>
              </div>
              <div class="example-box edgy">
                <h1 class="fit-title">Fit Title</h1>
              </div>
            </div>
          </div>
          <div class="topic-row">
            <div>
              <h1 id="palette">Color Palette</h1>
              <p>These are the various color codes and palettes being used in the current theme.</p>
              <div class="row">
                <div class="col">
                  <h4 class="h4 mt-5">Theme Colors</h4>
                </div>
              </div>
              <div class="row g-0 my-3">
                <div class="col-6">
                  <div class="color-box bg-primary">&nbsp;</div>
                </div>
                <div class="col-6">
                  <div class="color-box bg-secondary">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-success">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-danger">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-warning">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-info">&nbsp;</div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h4 class="h4 mt-5">All Colors</h4>
                  <div>
                    {!! \App\Helpers\Typography::phikiHighlight('<div class="bg-purple"> ... </div>', 'plain') !!}
                    <p>Any item can have its background color set via <code>.bg-{$color}</code>. Everything from the <code>$colors</code> map is available.</p>
                  </div>
                </div>
              </div>
              <div class="row g-0 my-3">
                <div class="col-3">
                  <div class="color-box bg-blue">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-indigo">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-purple">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-pink">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-red">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-orange">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-yellow">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-green">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-teal">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-cyan">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-gray">&nbsp;</div>
                </div>
                <div class="col-3">
                  <div class="color-box bg-gray-dark">&nbsp;</div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection
