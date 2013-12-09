<!doctype html>
<html class="no-js" lang="en" ng-app="writezApp">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Writez Dashboard</title>
    <link rel="stylesheet" href="templates/dashboard/css/foundation.css" />
    <link rel="stylesheet" href="templates/dashboard/css/app.css" />
    <script src="templates/dashboard/js/modernizr.js"></script>
  </head>
  <body>
    
    <div class="fixed">
      <div class="off-canvas-wrap">
        <div class="inner-wrap">
          <nav class="tab-bar">
            <section class="left-small">
              <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
            </section>

            <section class="middle tab-bar-section">
              <h1 class="title">Writez</h1>
            </section>
          </nav>

          <aside class="left-off-canvas-menu">
            <ul class="off-canvas-list">
              <li><label>Posts</label></li>
              <li><a href="#">Create New</a></li>
              <li><a href="#">Posts</a></li>
              <li><label>Me</label></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </aside>

          <section class="main-section">
            <!-- content goes here -->
            <div class="row" id="main-editor">
              <div class="small-12 medium-12 large-12 columns">
                <form>
                  <div class="row">
                    <div class="small-12 medium-12 large-12 columns">
                      <label for="post-title">Post Title</label>
                      <input type="text" id="post-title" name="post-title">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 medium-12 large-12 columns">
                      <label for="post-tag">Tags</label>
                      <input type="text" id="post-tag" name="post-tag">
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 medium-12 large-12 columns">
                      <textarea id="post-editor" name="post-editor"></textarea>
                    </div>
                  </div>
                  <div class="row footer-button">
                    <div class="small-12 medium-12 large-12 columns">
                      <input type="submit" id="post-submit" class="button" value="Publish">
                      <button id="post-tag" class="button success">Draft</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>

        <a class="exit-off-canvas"></a>

        </div>
      </div>
    </div>
    
    <script src="templates/dashboard/js/jquery.js"></script>
    <script src="templates/dashboard/ckeditor/ckeditor.js"></script>
    <script src="templates/dashboard/js/foundation.min.js"></script>
    <script src="templates/dashboard/js/app.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
