



<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>pd2stats/italian.php at master · noxwyll/pd2stats · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="noxwyll/pd2stats" name="twitter:title" /><meta content="pd2stats - Repository for" name="twitter:description" /><meta content="https://avatars0.githubusercontent.com/u/5482183?v=3&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars0.githubusercontent.com/u/5482183?v=3&amp;s=400" property="og:image" /><meta content="noxwyll/pd2stats" property="og:title" /><meta content="https://github.com/noxwyll/pd2stats" property="og:url" /><meta content="pd2stats - Repository for" property="og:description" />

      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="CAA152A7:4B42:84B3E5A:5477DF92" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="5K3tTmh0fhnK96Bj8prrS7//nVrpYSsTEp2Xlalhy5AwzEhiVN7i+zNR5dCYNLleTSNWR84ZUIQKiQ7QKzKYgQ==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-5561576deeeba73b1c76a1de3c562f5d65ee6ea990aa632c3b75c3a7c811ea3a.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-8b922a51411bd139fd6c83861e8c0a4568e7192869563d83ffadaca58d30b0b0.css" media="all" rel="stylesheet" type="text/css" />
    
    


    <meta http-equiv="x-pjax-version" content="c6a043219df23a1afa78b000b431ed8b">

      
  <meta name="description" content="pd2stats - Repository for">
  <meta name="go-import" content="github.com/noxwyll/pd2stats git https://github.com/noxwyll/pd2stats.git">

  <meta content="5482183" name="octolytics-dimension-user_id" /><meta content="noxwyll" name="octolytics-dimension-user_login" /><meta content="24496414" name="octolytics-dimension-repository_id" /><meta content="noxwyll/pd2stats" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="24496414" name="octolytics-dimension-repository_network_root_id" /><meta content="noxwyll/pd2stats" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/noxwyll/pd2stats/commits/master.atom" rel="alternate" title="Recent Commits to pd2stats:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production windows vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" ga-data-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="button primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="button" href="/login?return_to=%2Fnoxwyll%2Fpd2stats%2Fblob%2Fmaster%2Fincludes%2Flanguage%2Fenglish.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/noxwyll/pd2stats/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/noxwyll/pd2stats/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">


  <li>
      <a href="/login?return_to=%2Fnoxwyll%2Fpd2stats"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/noxwyll/pd2stats/stargazers">
      1
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fnoxwyll%2Fpd2stats"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/noxwyll/pd2stats/network" class="social-count">
        11
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/noxwyll" class="url fn" itemprop="url" rel="author"><span itemprop="title">noxwyll</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/noxwyll/pd2stats" class="js-current-repository" data-pjax="#js-repo-pjax-container">pd2stats</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/noxwyll/pd2stats/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/noxwyll/pd2stats" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /noxwyll/pd2stats">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/noxwyll/pd2stats/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /noxwyll/pd2stats/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
      <a href="/noxwyll/pd2stats/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /noxwyll/pd2stats/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>


  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/noxwyll/pd2stats/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /noxwyll/pd2stats/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/noxwyll/pd2stats/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /noxwyll/pd2stats/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                
  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/noxwyll/pd2stats.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/noxwyll/pd2stats.git" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group">
    <input type="text" class="input-mini input-monospace js-url-field"
           value="https://github.com/noxwyll/pd2stats" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/noxwyll/pd2stats" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button" title="Save noxwyll/pd2stats to your computer and use it in GitHub Desktop." aria-label="Save noxwyll/pd2stats to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/noxwyll/pd2stats/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download the contents of noxwyll/pd2stats as a zip file"
                   title="Download the contents of noxwyll/pd2stats as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/noxwyll/pd2stats/blob/f428e563f136e97988634c38be713aae45719daa/includes/language/english.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:a30e0a5dd896607d0634a38264acaefa -->

<div class="file-navigation">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/noxwyll/pd2stats/blob/master/includes/language/english.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="button-group right">
    <a href="/noxwyll/pd2stats/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="includes/language/english.php" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/noxwyll/pd2stats" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">pd2stats</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/noxwyll/pd2stats/tree/master/includes" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">includes</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/noxwyll/pd2stats/tree/master/includes/language" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">language</span></a></span><span class="separator"> / </span><strong class="final-path">italian.php</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="" class="avatar" height="24" src="https://1.gravatar.com/avatar/8332422c57957bedb3f173b9f5b37d27?d=https%3A%2F%2Fassets-cdn.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=x&amp;s=140" width="24" />
        <span class="author"><span>noxwyll</span></span>
        <time datetime="2014-11-19T18:59:35Z" is="relative-time">Nov 19, 2014</time>
        <div class="commit-title">
            <a href="/noxwyll/pd2stats/commit/f428e563f136e97988634c38be713aae45719daa" class="message" data-pjax="true" title="gage historical">gage historical</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>1</strong>
           contributor
        </a>
      </p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="noxwyll" data-user="5482183" height="24" src="https://avatars0.githubusercontent.com/u/5482183?v=3&amp;s=48" width="24" />
            <a href="/noxwyll">noxwyll</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span>988 lines (985 sloc)</span>
          <span class="meta-divider"></span>
        <span>102.474 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/noxwyll/pd2stats/raw/master/includes/language/english.php" class="minibutton " id="raw-url">Raw</a>
            <a href="/noxwyll/pd2stats/blame/master/includes/language/english.php" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/noxwyll/pd2stats/commits/master/includes/language/english.php" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

          <a class="octicon-button tooltipped tooltipped-nw"
             href="http://windows.github.com" aria-label="Open this file in GitHub for Windows">
              <span class="octicon octicon-device-desktop"></span>
          </a>

            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
    

  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size-8 js-file-line-container">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// Language: Italian</span></span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// File written by: F0rEv3rN00bZ</span></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// Item descriptions identical with ingame text? Yes</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Lingua<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Italiano<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>autore<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>F0rEv3rN00bZ<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>charset<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>UTF-8<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// Formating Instructions</span></span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// &lt;div class=&quot;bluein&quot;&gt;NR&lt;/div&gt; is used to color numbers and % in Skills.</span></span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// Examples: &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; and &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt;</span></span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// &lt;br/&gt;&lt;br/&gt; is used in item descriptions for a new paragraph</span></span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">// Example: Paragraph 1 &lt;br/&gt;&lt;br/&gt; Parapraph 2</span></span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Only translate things that are at $l[&#39;stuff&#39;] = &#39;HERE&#39;;</span></span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//The &#39; &#39; must be present!</span></span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//If you need to use a &#39; in text write \&#39;</span></span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////</span></span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////PERMANENT</span></span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Title</span></span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>title<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Payday 2 Stats<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>title-full<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Statistiche di Payday 2<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>meta-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Benvenuti nelle statistiche di Payday 2, un modo facile per visualizzare ogni giocatore<span class="pl-cce">\&#39;</span>s Payday 2 Stats.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>meta-language<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Italiano<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>meta-keywords<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Payday 2, Profili, Statistiche, pd2stats.com<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Index and Search</span></span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>welcome<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Benvenuti nelle statistiche di Payday2!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>search-txt<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ricerca<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>search-msg<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Per favore inserisci un collegamento ad un profilo steam, un profilo ID personalizzato o un numero profilo.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>search-button<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ricerca!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Menu</span></span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>steamgroup<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gruppo Steam<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>feedback<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Feedback<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>notice<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Menu<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ads<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pubblicità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>switch<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>cambia<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>languagetex<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lingua<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Itemindex</span></span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>maskindex<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>maskindex<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>weaponindex<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>weaponindex<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gearindex<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>gearindex<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>levelindex<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>levelindex<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>itemindexmenu<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Indice del Menu degli oggetti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gear<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Equipaggiamento<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>levelmenu<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Livelli<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>weaponlist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista delle Armi<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>masklist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista delle Maschere<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armorlist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista delle Armature<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gadgetlist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista degli Equipaggiamenti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>heistlist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista delle Missioni<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapelist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista delle Fughe<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>levellist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista dei Livelli<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gearlist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lista degli Equipaggiamenti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Service</span></span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>servicestatus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Controlla lo stato del servizio<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>vanitystatus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Player Vanity Status<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>summarystatus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Stato generale del giocatore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ownershipstatus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Player Ownership Status<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>statisticsstatus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Player Statistics Status<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>offline<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>OFFLINE (Click eye for more information)<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>online<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ONLINE<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Tags and Warnings</span></span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cflag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>[Cheater]<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cflag-warning<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>flag non è sempre corretto a causa di alcuni errori relativi ai livelli ed abilità presenti nel gioco.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pflag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>[Family Sharing]<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pflag-warning<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>tag signifca che il gioco non è posseduto dal giocatore.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hflag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>[Nascosto]<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sflag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>[Sospetto]<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level-warning<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Attualmente il livello del giocatore non è occasionalmente coretto. Overkill ci sta lavorando.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Item Quality Texts</span></span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>community-item<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>QUESTO E' UN OGGETTO DELLA COMUNITA'!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dlc-item-start<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>QUESTO E' UN<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dlc-item-end<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>OGGETTO!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>infamous-item<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>QUESTO E' UN OGGETTO INFAME!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>custom-item<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>QUESTO E' UN OGGETTO PERSONALIZZATO FATTO DA<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Errors</span></span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text1<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ID non in uso!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text2<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>IO SONO UN ERRORE<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text3<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Steam non ha risposto in tempo!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text4<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nessun testo da ricercare<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text5<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nessun numero profilo presente<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-text6<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Utente Bannato<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Errore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-start<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Qualcosa è andato storto ma puoi sempre<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-mid<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>provare nuovamente<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>error-end<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Per favore inserisci un link ad un profilo steam, un profilo ID personalizzato o un numero di un profilo.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Profile</span></span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>meta-private<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ha settato il suo profilo a privato e solo le informazioni base verranno mostrate.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>steam-link<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Collegamento Steam<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>profile-link<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Collegamento al profilo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Feedback</span></span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>question-box<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Feedback Domande<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>feedback-meta<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questo è il posto dove lasciare feedback su Payday 2 Stats.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Stats Page</span></span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>quality<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Qualità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>comments<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Commenti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>comments-no-script<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Per favore abilità JavaScript per vedere il<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>comments-powered<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>commenti autorizzati da<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tips<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Suggerimenti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tips-start<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lo sapevi che puoi prendere un link al profilo steam così:<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tips-mid<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>e sostituendo la parte del collegamento?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>credits<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ringraziamenti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skilltrees<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Alberi delle abilità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skilltrees-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questa è la configurazione che il giocatore stava usando quando i dati sono stati inviati dal gioco a Steam. Occasionalmente l'albero delle abilità mostra come se avesse tutto. Non si sa correntemente perché questo capiti. Comunque HoxHud può essere usato per rivalidare i dati delle abilità. Installalo e riconfigura le abilità. Nota anche che il totale dei punti abilità disponibli possono essere sbagliati a causa del bug sul contrasto dei livelli.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mastermind<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Manipolatore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>technician<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tecnico<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ghost<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Spettro<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>enforcer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Supporto<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fugitive<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fuggitivo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hours<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>minutes<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>minuti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Livello Payday 2:<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>playtime<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ore di gioco<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skillpoints<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Punti abilità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skillpoints8<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Punti abilità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skillpoint<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Punto abilità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>basic<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Base<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Migliorato<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlock<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sblocca per<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>basics<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Statistiche base<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>basics-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questa è la statistica dei giorni giocati. Tiene traccia dei dati approssimaivamente dall'aggiornamento Go Bank. Il conteggio mostrato è in giorni ed include anche le giornate delle fughe. Questo significa che attualmente considera giorni falliti e riusciti.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>risk<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Difficoltà<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>days-played<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Giorni giocati<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>total-day-start<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Per un totale di<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>total-day-mid<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>di successi e<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>total-day-end<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>di giorni falliti.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>heist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Livelli<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>heist-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati dei livelli. Tiene traccia dei dati dall'aggiornamento #32.1. Verde significa missioni vinte, gialla conta le missioni vinte in cui ci si è uniti durante la missione e rossa sono le missioni fallite. La prima percentuale è calcolata usando solo questa misione e la seconda usando la percentuale di tutte le missioni.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sort<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ordina per<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>win<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Vinte<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dropin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Disconnesse<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fail<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fallite<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escape<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fughe<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escape-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati delle fughe. Tiene traccia dei dati approssimativamente dall'aggiornamento GO Bank. Questo significa che conta correntemente giorni falliti e riusciti.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>total<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Totale<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>masks<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Maschere<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>masks-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati sulle maschere. L'uso delle maschere è visualizzato in giornate incluse fallite, riuscite e fughe.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>usage<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Utilizzo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>name<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nome<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armors<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armature<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armor<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armatura<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armor-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati sulle armature. Tiene traccia dei dati dall'aggiornamento #32.1. Il conto è mostrato in giorni. Questo significa che conta i giorni falliti e riusciti.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>times-used<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tempo utilizzato<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>concealment<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Occultamento<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>speed<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Velocità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dodge<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Schivata<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>steadiness<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fermezza<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stamina<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Resistenza<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gadgets<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dispositivi<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gadgets-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati sui dispositivi. Tiene traccia dei dati approsimativamente dall'aggiornamento di GO Bank. Il conto mostrato è in dispositivi schierati.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>weapons<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armi<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>weapons-help<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Questi sono i dati sulle armi. Tiene traccia delle uccisioni dall'aggiornamento #32.1 e dell'utilizzo approssimativamente dall'aggiornamento di GO Bank Update. Inoltre il conto delle armi da mischia è iniziato durante l'aggiornamento #31.2. Il conto dell'utilizzo è mostrato in giorni, incluse le fughe. Questo significa che conta correntemente giorni falliti e riusciti.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>primary<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Primarie<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>secondary<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Secondarie<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>melee<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mischia<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kills<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Uccisioni<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>percent-kills<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>% di uccisioni totali<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>magazine<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Caricatore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Munizioni Totali<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>firerate<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Frequenza di fuoco<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>damage<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Danno<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>accuracy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Precisione<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stability<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Stabilità<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>threat<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Minaccia<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>knockdown<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Stendere<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chargetime<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tempo di carica<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>range<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Raggio<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>infinite<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>∞<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tops<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Profili più visti<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>totalview<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Visite totali<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>playername<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nome Giocatore<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//DLC Names</span></span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Armored_Transport<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>TRASPORTO ARMATO<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Big_Bank_Heist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>LA GRANDE BANCA<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Weapon_Pack_01<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE WEAPON PACK #01<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Weapon_Pack_02<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE WEAPON PACK #02<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Assault_Pack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE ASSAULT PACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Sniper_Pack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE SNIPER PACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Shotgun_Pack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE SHOTGUN PACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Xmas_soundtrack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>XMAS SOUNDTRACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Poetry_jam<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>POETRY JAM<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Twisted_metal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>TWISTED METAL<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Halloween<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>HALLOWEEN<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Twitch_pack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>HUMBLE MASK PACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hotline_miami_dlc<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>HOTLINE MIAMI DLC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>humblehalloween_pack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>HUMBLE MASK PACK 2<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>Gage_Historical<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGE HISTORICAL PACK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Weapons</span></span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Primary</span></span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Assault Rifles</span></span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akm_gold<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AK.762 DORATO<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>amcar<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AMCAR<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ak74<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>new_m4<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>CAR-4<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>aug<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>UAR<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akm<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AK.762<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>g36<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>JP36<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>new_m14<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>M308<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ak5<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AK5<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>m16<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>AMR-16<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>s552<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Commando 553<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>scar<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Eagle Heavy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Falcon<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>famas<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Clarion<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>galil<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gecko 7.62<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>g3<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gewehr 3<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Sniper Rifles</span></span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>msr<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rattlesnake<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>r93<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>R93<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>m95<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Thanatos .50 cal<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mosin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nagant<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Shotguns</span></span></td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>r870<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Reinfeld 880<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>saiga<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Izhma 12G<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>huntsman<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mosconi 12G<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>benelli<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>M1014<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ksg<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Raven<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spas12<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Predator 12G<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Light Machine Guns</span></span></td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rpk<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>RPK<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>m249<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>KSP<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hk21<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brenner-21<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mg42<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Buzzsaw 42<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Saws</span></span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>saw<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>OVE9000 Saw<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Grenade Launcher</span></span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gre_m79<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GL40<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Akimbo</span></span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jowi<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Akimbo Chimano Compact<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>x_deagle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Akimbo Deagle<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>x_1911<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Akimbo Crosskill<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>x_b92fs<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Akimbo Bernetti 9<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Secondary</span></span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Pistols</span></span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>usp<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Interceptor 45<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>g22c<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chimano Custom<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>glock_17<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chimano 88<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>colt_1911<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crosskill<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>b92fs<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bernetti 9<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>new_raging_bull<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bronco .44<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>glock_18c<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>STRYK 18c<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>deagle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Deagle<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ppk<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gruber Kurz<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>p226<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Signature .40<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>g26<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chimano Compact<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>c96<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Broomstick<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Submachine Guns</span></span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mac10<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mark 10<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>new_mp5<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Compact-5<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mp9<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>CMP<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>olympic<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Para<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akmsu<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Krinkov<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>p90<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Kobus 90<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>m45<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Swedish K<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mp7<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>SpecOps<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cobrasmg<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cobra<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blastersmg<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Blaster 9mm<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>uzi<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Uzi<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sterling<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Patchett L2A1<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Shotguns</span></span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>judge<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Judge<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>serbu<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Locomotive 12G<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>striker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Street Sweeper<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Melee</span></span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>butt<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Weapon Butt<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>butt-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>In armed robberies, beating the victims with firearms is usually more common than to shoot or stab them. You usually either butt-stroke someone with a rifle or Pistol-whip them with a handgun.&lt;br/&gt;&lt;br/&gt;This is the quickest melee attack.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fists<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fists<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fists-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You<span class="pl-cce">\&#39;</span>re no boxer, but you can still throw a pretty good punch. All it takes is some strength, speed and timing and you<span class="pl-cce">\&#39;</span>ll land a striking blow in no-time.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brass_knuckles<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>350K Brass Knuckles<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brass_knuckles-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Knuckle style weapons have been used all over the world for hundreds of years. Brass knuckles concentrate the punch<span class="pl-cce">\&#39;</span>s force by directing it toward a harder and smaller area, increasing the chances of tissue disruption. Hit hard enough and you<span class="pl-cce">\&#39;</span>ll even fracture some bones.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>moneybundle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Money Bundle<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>moneybundle-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bundling money together with a strap is as old as money itself. Beating people with money is something rick people and pimps have been doing for a very long time.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>barbedwire<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lucille Baseball Bat<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>barbedwire-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A baseball bat you can hit home-runs with.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kabar<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>URSA Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kabar-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The URSA Knife is a hard wearing, indestructible fighting/utility knife dating back to 1942. Bowie blade, serrated edge, no nonsense. A Classic.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kampfmesser<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Krieger Blade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kampfmesser-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Krieger Blade is the standard knife of the German Army. Great grip, and the Tanto blade makes it an excellent choice for combat.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gerber<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Berger Combat Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gerber-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Berger Combat Knife is a popular tactical knife with a folding clip point blade. Compact, light and high-tech materials makes a fast and dangerous tool.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rambo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Trautman Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rambo-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Trautman Knife is a survival knife with a heavy bowie blade. The length, serrated spine and centred tip works just as well in the wilderness as it does in closed combat.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shovel<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>K.L.A.S. Shovel<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shovel-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The K.L.A.S. shovel is used by military forces for a variety of purposes. The shovel can be found among survivalists, free-drivers, campers, hikers, gardeners and war re-enactment groups. It can also be used as a weapon - sharpen the edges and you<span class="pl-cce">\&#39;</span>ll be cutting though flesh and bone. If you use it correctly, that is. Which you don<span class="pl-cce">\&#39;</span>t.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baton<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Telescopic Baton<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baton-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Every heisters and law enforcers favourite weapon for crowd control and dispersal of non-compliant people. The advantages of expandable baton over a fixed baton are numerous. Lightweight and effective, more versatile and look more intimidating to any potential aggressor.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tomahawk<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Survival Tomahawk<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tomahawk-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Historically used as a general purpose tool, for throwing at people and the occasional hand-to-hand melee. A weapon with which almost any crook can attain some degree of proficiency. Only through proper heisting can one begin to realize the full potential of the tomahawk as both a tool and a weapon. But mostly weapon.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>becker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Utility Machete<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>becker-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A machete is a large cleaver-like knife frequently use din tropical countries to cut through rain forest undergrowth, rebellions and for agricultural purposes. It is common to see people using machetes for other jobs as well, such as splitting open coconuts, skull, yard work and robbing banks.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bayonet<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bayonet<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bayonet-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The clip point Bayonet is a battlefield classic. Originally intended to be mounted on your rifle so you could use it as a spear, this baby rides in your pocket instead and comes out when you start wielding CQB-style.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullseye<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Compact Hatchet<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullseye-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Compact Hatchet is a hatchet made from a single piece of forged surgical steel with a rubberised handle.&lt;br/&gt;&lt;br/&gt;I don<span class="pl-cce">\&#39;</span>t even know what to say to be honest - this is not something you would bring to a fight unless you were some kind of psycho, right? I mean, this is intended for chopping logs and going camping, not robbing banks. Right?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>x46<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>X-46 Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>x46-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The X-46 Knife is a 6<span class="pl-cce">\&#39;\&#39;</span> piece of coated, A2 steel, in a partially serrated bowie blade configuration with a false top edge. Integrated guard and glass breaker pommel tip. The multi-purpose field design of this knife makes it as useful on the battlefield as it is in an emergency.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dingdong<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ding Dong Breaching Tool<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dingdong-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Ding Dong Breaching Tool is basically a tactical sledgehammer. Originally intended for use as a breaching tool, battering ram, and pry bar rolled into one, I am guessing you<span class="pl-cce">\&#39;</span>ll mostly be using it for cracking heads open. Great damage &amp; knock-down, but relatively slow on the swing.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baseballbat<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Baseball Bat<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baseballbat-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>briefcase<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>50 Blessings Briefcase<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>briefcase-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cleaver<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cleaver<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cleaver-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fireaxe<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fire Axe<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fireaxe-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>machete<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Machete<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>machete-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kabartanto<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ursa Tanto<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kabartanto-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>toothbrush<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nova<span class="pl-cce">\&#39;</span>s Shank<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>toothbrush-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chef<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Psycho Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chef-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fairbair<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Trench Knife<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fairbair-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>freedom<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Spear of Freedom<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>freedom-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>model24<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Potato Masher<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>model24-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>swagger<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Swagger Stick<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>swagger-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Grenades</span></span></td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>frag-grenade<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Frag Grenade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Gadgets</span></span></td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammo_bag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ammo Bag<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammo_bag-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The ammo bag is a portable bag, originally intended to allow soldiers to carry extra ammunition.&lt;br/&gt;&lt;br/&gt;To use the ammo bag, you need to place it by holding [G]. Once placed it cannot be moved, but it can be used by you and your crew by holding [F] to gain more ammunition.&lt;br/&gt;&lt;br/&gt;The ammo bag has limited uses and when it is consumed, it disappears. You can see how many uses are left by looking at the ammo bag.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>doctor_bag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Doctor Bag<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>doctor_bag-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The doctor bag is a portable bag, usually used by a physician or other medical progression to transport medical supplies and medicine.&lt;br/&gt;&lt;br/&gt;To use the doctor bag, you need to place it by holding [G]. Once placed it cannot be moved, but it can be used by you and your crew by holding [F] to regain health.&lt;br/&gt;&lt;br/&gt;The doctor bag has limited uses and when it is consumed, it disappears. You can see how many uses are left by looking at the doctor bag.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>trip_mine<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Trip Mine<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>trip_mine-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The trip mine is an explosive device and is designed to destroy safes and disable enemy targets as they pass over or near the trip mine.&lt;br/&gt;&lt;br/&gt;To use the trip mine, you need to place it by holding [G]. The trigger laser can be toggled by pressing [F] once the trip mine is placed, acting as a tripwire to detonate the mine.&lt;br/&gt;&lt;br/&gt;Once placed it cannot be moved but it can be interacted with by you and your crew. If the beam is broken or the charge is fired upon, the mine will detonate. When the trip mine has exploded, it disappears.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentry_gun<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sentry Gun<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentry_gun-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A sentry gun is a gun that automatically aims and fires at targets that are detected by its sensors. Historically, military sentry guns were used for detecting and destroying short range incoming missiles and enemy aircraft.&lt;br/&gt;&lt;br/&gt;To use the sentry gun, you need to place it by holding [G]. Once placed, the sentry gun cannot be moved. The sentry gun can be destroyed by being fired at. When the sentry gun has no more ammunition, it will stop firing.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecm_jammer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ECM Jammer<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecm_jammer-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>An electronic countermeasure (ECM) is an electronic device designed to trick radar, sonar and other detection systems.&lt;br/&gt;&lt;br/&gt;To use the ECM jammer, you need to place it by holding [G]. Once placed it cannot be moved.&lt;br/&gt;&lt;br/&gt;If you have the right skill, you can toggle the ECM jammer by pressing [F]. The ECM jammer then has a chance to incapacitate your enemies within a certain radius, When consumed. it stops working.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armor_kit<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armor Bag<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>armor_kit-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The armor bag is a portable bag used to transport an armor of your choice that can be used during a heist.&lt;br/&gt;&lt;br/&gt;To use the armor bag, hold [G] to put it on your equipped armor. Until that, you will wear the Two-Piece Suit.&lt;br/&gt;&lt;br/&gt;The armor bag has only one use and when it is consumed, it disappears.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bodybags_bag<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Body Bag Case<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bodybags_bag-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The body bag case is a case containing body bags that are designed to contain a human body, used for the storage and transportation of corpses.&lt;br/&gt;&lt;br/&gt;To use the body bag case, you need to place it by holding [G]. Once placed it cannot be moved, but it can be used by you and your crew by holding [F] to gain a body bag.&lt;br/&gt;&lt;br/&gt;The body bag case has limited uses and when it is consumed, it disappears. You can see how many uses are left by looking at the body bag case.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>first_aid_kit<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>First Aid Kit<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>first_aid_kit-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The first aid kit is a collection of supplies and equipment for use in giving first aid.&lt;br/&gt;&lt;br/&gt;To use the first aid kit, you need to place it by holding [G]. Once placed it cannot be moved, but it can be used by you and your crew by holding [F] to regain health.&lt;br/&gt;&lt;br/&gt;The first aid kit has limited uses and when it is consumed, it disappears. You can see how many uses are left by looking at the first aid kit.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Armor</span></span></td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_1<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Two-Piece Suit<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_1-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>No movement penalty, no visibility.&lt;br/&gt;&lt;br/&gt;This is the standard two-piece suit that any self-respecting criminal should wear.&lt;br/&gt;&lt;br/&gt;It provides no extra protection but has the highest concealment factor, making it the best choice for a heist where you want to go undetected and blend into the crowd.&lt;br/&gt;&lt;br/&gt;Suits are usually reserved for special occasions, such as weddings, funerals and bank robberies.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_2<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lightweight Ballistic Vest<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_2-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Little movement penalty, low visibility.&lt;br/&gt;&lt;br/&gt;The lightweight ballistic vest is easy to wear, concealable bullet proof vest. It offers a specially developed trauma liner which provides effective blunt trauma protection, making it a good choice to protect yourself.&lt;br/&gt;&lt;br/&gt;Lightweight ballistic vests are used by dignitaries and VIP<span class="pl-cce">\&#39;</span>s, sky marshals as well as executive and diplomatic security professionals.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_3<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ballistic Vest<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_3-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Little movement penalty, low visibility.&lt;br/&gt;&lt;br/&gt;The ballistic vest is a standard issue bullet-resistant soft vest that is worn on the torso. It offers good protection from small-calibre handgun and shotgun projectiles, making it essential for anyone in the line of fire.&lt;br/&gt;&lt;br/&gt;Ballistic vests are used by police forces, security guards and bodyguards.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_4<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Heavy Ballistic Vest<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_4-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Small movement penalty, medium visibility.&lt;br/&gt;&lt;br/&gt;The heavy ballistic vest is a hard-plate reinforced vest that is worn on the torso. It is a modern body armor combining a ballistic vests with shoulder and side protection armor components, making it a great protection of choice.&lt;br/&gt;&lt;br/&gt;Heavy ballistic vests are worn by soldiers, police tactical units, and hostage rescue teams.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_5<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Flak Jacket<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_5-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Medium movement penalty, medium visibility.&lt;br/&gt;&lt;br/&gt;The flak jacket by GenSec Security Industries is a modern take on the classic version. It absorbs the impact from firearm projectiles and shrapnel from explosions.&lt;br/&gt;&lt;br/&gt;It combines a heavy ballistic vest with shoulder and side protection armor components, offering spine protection as well.&lt;br/&gt;&lt;br/&gt;Flak jackets are worn by Marines, combat soldiers and GenSec FTSU task forces.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_6<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Combined Tactical Vest<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_6-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Medium movement penalty, high visibility.&lt;br/&gt;&lt;br/&gt;The Combined Tactical Vest was developed due to the challenges of modern warfare. It is made of high performance ballistic materials and is designed to carry heavy loads, such as ammo pouches, radios and other accessories.&lt;br/&gt;&lt;br/&gt;Combined tactical vests are worn by soldiers, special forces and other organized military units across the world.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_7<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Improved Combined Tactical Vest<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>level_7-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Large movement penalty, high visibility.&lt;br/&gt;&lt;br/&gt;The Improved Combined Tactical Vest is a stolen experimental prototype made by GenSec Security Industries.&lt;br/&gt;&lt;br/&gt;Based on White Mesa technology it uses both soft and hard armor solutions. The perfectly fitted interlocking fibre layers rightly woven together with metal plates are specially angled to deflect projectiles and shield from explosions. In short, it provides complete protection.&lt;br/&gt;&lt;br/&gt;It is not for sale and is wanted by GenSec Security Industries.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Masks</span></span></td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Community Group</span></span></td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bear<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mark<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bear-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>hello from Russia.&lt;br/&gt;&lt;br/&gt;I think it will be the best game in the world.&lt;br/&gt;&lt;br/&gt;It<span class="pl-cce">\&#39;</span>s just a bear.&lt;br/&gt;&lt;br/&gt;Just before there was an empty.&lt;br/&gt;&lt;br/&gt;Thank you&lt;br/&gt;&lt;br/&gt;- Vasiliy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>heat<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hockey Heat<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>heat-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A classic hockey mask.&lt;br/&gt;&lt;br/&gt;A guy told me one time...&lt;br/&gt;&lt;br/&gt;&quot;Don<span class="pl-cce">\&#39;</span>t let yourself get attached to anything you are not willing to walk out on in 30 seconds flat if you feel the heat around the corner.&quot;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_happy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Happy Santa<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_happy-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Santa, more known as Santa Claus, Saint Nicholas, Father Christmas and Kris Kringle (?) is a man of epic proportions. Words like legendary, mythical, historical and folkloric best describe this beast of a man.&lt;br/&gt;&lt;br/&gt;This particular mask is the Happy Santa mask. Big smile and super jolly with red cheeks and all, wearing this you<span class="pl-cce">\&#39;</span>ll even bring the most negative of Bulldozers into a joyous smile.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unicorn<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Peter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unicorn-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Peter is a true legend and has been so for like, ever. A beast with a large, pointed, spiralling horn projected from its forehead, Peter is known by all of mankind as the go-to guy for whenever you need to touch the rainbow. No, touch it. Touch the mother-fucking rainbow. Now taste it.&lt;br/&gt;&lt;br/&gt;Shh. It<span class="pl-cce">\&#39;</span>s okay. You did good.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smiley<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Smiley<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smiley-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>There was once a clown who couldn<span class="pl-cce">\&#39;</span>t smile. He watched as the other clowns brought joy and happiness to both young and old. He grew envious and angry, so to the that he stapled his lips to his cheeks, giving him a wide grin. But instead of making everyone happy, they were all afraid, why, he did not understand.&lt;br/&gt;&lt;br/&gt;He came to the conclusion perhaps this was his calling, to make people afraid... Very afraid.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gumbo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gumbo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gumbo-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Little is known about the man known as the devouring clown, but for a long time people believed that his read eyes were part of his outfit. Needless to say, they were wrong. Now people fear the red eyed clown with a laugh so evil it makes even the most seasoned badasses quiver in fear.&lt;br/&gt;&lt;br/&gt;Word on the street is that he haunts alleyways in a demonic shape looking for something... Or someone. All that is known is that people end up dead, more dead than you thought possible...<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jw_shades<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Collateral<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jw_shades-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>These shades belonged to a colleague of John<span class="pl-cce">\&#39;</span>s that he was hired to kill.&lt;br/&gt;&lt;br/&gt;It started like any other night. Only this night, he got a contract to kill another contract killer who was making rounds that day. John knew he had five stops to make and was using the same taxi cab between all of them.&lt;br/&gt;&lt;br/&gt;In the end, he didn<span class="pl-cce">\&#39;</span>t even need to do the deed himself - he was already dead when he found him.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stoneface<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Terminator<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stoneface-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>These shades belonged to an assassin from a distant land. The assassin John who was sent to kill was built like a machine. The one would prove to be hard. He used a customized Improved Combined Tactical Vest. He was fully armoured and very though. Behind all that armor however, John knew there was only flesh and bones.&lt;br/&gt;&lt;br/&gt;John managed to kill him in the end. He knew however that when he removed him from his place, another would replace him.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wayfarer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Reservoir Dog<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wayfarer-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>These shades belonged to five strangers. John was hired to kill a group of people who were about to commit the perfect crime. They all dressed the same and had code names so they were easy to identify.&lt;br/&gt;&lt;br/&gt;However, John arrived too late to the scene. The police were already there. He made sure the strangers were all dead before he left the scene.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>crazy_lion<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mad Lion<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>crazy_lion-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A horrifying mask shaped like the head of a lion.&lt;br/&gt;&lt;br/&gt;Little is known about this mask. It is said it was made by a crazy Balkan scientist who had a sick fascination for lions. Only he could see the beauty in this mask.&lt;br/&gt;&lt;br/&gt;The mask was given to you by someone who wishes you well.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Crimefest</span></span></td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combusto<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Firestarter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combusto-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This clown used to be a master of pyrotechnics, having a fire breathing number that no one could top. His competitors in the not-so-known-firebreathing-clown-scene were unhappy with his success... And spiked his cocktail. With third degree burns on his face and an evil look in his eyes he fought fire with fire and set the other clown ablaze. But he didn<span class="pl-cce">\&#39;</span>t stop there, the fiery hatred in him burned too bright. Now he seeks to set the world on fire.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spackle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Spackle<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spackle-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Once a well renowned circus clown Spackle was the best make-up artist in the scene. Known for her skill and ability to make people look so unlike themselves, she became obsessed with art. With her own face as canvas she tirelessly applied layer after layer, each becoming more twisted. She was sent to an asylum after killing five people during their make-up process.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Lootbag</span></span></td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skull<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Skull<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skull-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>An exclusive mask representing death and mortality.&lt;br/&gt;&lt;br/&gt;Created in the heavens as a gift by the gods to men and women who believed in them early on, who built their shrines and spread their beliefs across the lands.&lt;br/&gt;&lt;br/&gt;Thank you for believing in us! We salute you!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Merry Soundtrack</span></span></td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_mad<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Furious Santa<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_mad-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Santa, more known as Santa Claus, Saint Nicholas, Father Christmas and Kris Kringle (?) is a man of epic proportions. Words like legendary, mythical, historical and folkloric best describe this beast of a man.&lt;br/&gt;&lt;br/&gt;This particular mask is the Furious Santa mask. It<span class="pl-cce">\&#39;</span>s worn by angry internet users and bad children who didn<span class="pl-cce">\&#39;</span>t get the presents they wanted.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_surprise<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Surprised Santa<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
        <td id="LC399" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_surprise-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Santa, more known as Santa Claus, Saint Nicholas, Father Christmas and Kris Kringle (?) is a man of epic proportions. Words like legendary, mythical, historical and folkloric best describe this beast of a man.&lt;br/&gt;&lt;br/&gt;This particular mask is the Surprised Santa mask. Who knows why he<span class="pl-cce">\&#39;</span>s surprised? Maybe someone stole his sled? Maybe someone stole his reindeer? Maybe he just saw someone rob a bank?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
        <td id="LC400" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_drunk<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tipsy Santa<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
        <td id="LC401" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>santa_drunk-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Santa, more known as Santa Claus, Saint Nicholas, Father Christmas and Kris Kringle (?) is a man of epic proportions. Words like legendary, mythical, historical and folkloric best describe this beast of a man.&lt;br/&gt;&lt;br/&gt;This particular mask is the Tipsy Santa mask. You know that type of feeling when you<span class="pl-cce">\&#39;</span>re tipsy and are feeling something<span class="pl-cce">\&#39;</span>s going on but you aren<span class="pl-cce">\&#39;</span>t hammered yet. That<span class="pl-cce">\&#39;</span>s tipsy for ya.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
        <td id="LC402" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Armored Transport</span></span></td>
      </tr>
      <tr>
        <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
        <td id="LC403" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nixon<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>37th<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
        <td id="LC404" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nixon-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Politician, Commander-In-Chief, father. Had an ambition to serve this great nation for 8 years. He wasn<span class="pl-cce">\&#39;</span>t a crook, for sure.&lt;br/&gt;&lt;br/&gt;The 37th was the only president who resigned from office. Among criminals however, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
        <td id="LC405" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clinton<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>42nd<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
        <td id="LC406" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clinton-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Politician, Commander-In-Chief, father. Served this great nation for 8 years. A ladies man, no doubt.&lt;br/&gt;&lt;br/&gt;The 42nd was one of the most peaceful presidents in history. Among criminals however, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
        <td id="LC407" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bush<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>43rd<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
        <td id="LC408" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bush-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Politician, Commander-In-Chief, father. Served this great nation for 8 years. A word-smith, no doubt.&lt;br/&gt;&lt;br/&gt;The 43rd was one of the most unpopular presidents in history. Among criminals however, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
        <td id="LC409" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>obama<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>44th<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
        <td id="LC410" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>obama-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Politician, Commander-In-Chief, father. Had an ambition to serve this great nation for 8 years. A hopeful man, and an award winner at that.&lt;br/&gt;&lt;br/&gt;The 44th is one of the most ambitious presidents in history. Among criminals however, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
        <td id="LC411" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Weapon Pack 1</span></span></td>
      </tr>
      <tr>
        <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
        <td id="LC412" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pitbull<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Arnold<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
        <td id="LC413" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pitbull-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Arnold the Bulldog has always been a doge of great ambition.&lt;br/&gt;&lt;br/&gt;He wanted to build much body - and he did. He became the biggest doge in his little mountain town and received such prize.&lt;br/&gt;&lt;br/&gt;He then moved States, got into office, starred in a couple of weird doge movies called &quot;The Dogenator&quot; and &quot;The Dogenator II - such judgement&quot;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
        <td id="LC414" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>eagle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chuck<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
        <td id="LC415" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>eagle-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chuck the Eagle represents everything that is righteous, good and true.&lt;br/&gt;&lt;br/&gt;A famous Martial Artist found this huge eagle while he was doing karate in the mountains of Alaska.&lt;br/&gt;&lt;br/&gt;They had a fight for several hours but eventually the Martial Artist won. He took the head, made it into a mask and named it after himself.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
        <td id="LC416" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>goat<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dolph<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
        <td id="LC417" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>goat-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dolph the Goat represents natural strength and stone.&lt;br/&gt;&lt;br/&gt;It was found by a group of adventurers in a mountain cave in the most northern parts of Sweden.&lt;br/&gt;&lt;br/&gt;Legend has it that the god of thunder, Thor, had a chariot that was pulled by two goats. This mask probably has nothing to do with that legend though. That would be crazy.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
        <td id="LC418" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>panda<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Jean-Claude<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
        <td id="LC419" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>panda-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Jean-Claude the Panda used to be really cool and star in all sorts of crazy stuff.&lt;br/&gt;&lt;br/&gt;Sadly, he later became a drug addict and stopped being cool. Because of training however, he managed to get back on track.&lt;br/&gt;&lt;br/&gt;Most recently, you could see him do this weird things with two trucks. That shit was fucked up. You should check it out if you haven<span class="pl-cce">\&#39;</span>t.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
        <td id="LC420" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Weapon Pack 2</span></span></td>
      </tr>
      <tr>
        <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
        <td id="LC421" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_deltaforce<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Alpha Force<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
        <td id="LC422" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_deltaforce-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>4th Domestic Operation Group-force Enforcers-Alpha (4th DOGE-A), popularly ridiculed as Alpha Force, is a U.S. Army component of the Joint Common Operations Command. They<span class="pl-cce">\&#39;</span>re reputation is pretty poor and have become a less and less respected force to deal with.&lt;br/&gt;&lt;br/&gt;One of the members probably dropped this helmet when he fled from you.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
        <td id="LC423" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cloth_commander<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Commander Crime<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
        <td id="LC424" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cloth_commander-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Commander Crime is an American fictional character, a super-villain and the supreme leader of the criminal network C.R.I.M.E. who appears in comic books by OVERKILL Comics.&lt;br/&gt;&lt;br/&gt;The character was created by now world renowned writer-editor-artist and professional badminton player Max Elmberg Sjöholm.&lt;br/&gt;&lt;br/&gt;Commander Crime made his first appearance in The Amazing Career Criminals: The PAYDAY gang gets a C.R.I.M.E. offer they can<span class="pl-cce">\&#39;</span>t refuse!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
        <td id="LC425" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_blade<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gage Blade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
        <td id="LC426" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_blade-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Gage Blade is one of Gage<span class="pl-cce">\&#39;</span>s own personal favorite ballistic face masks. It will protect your face from one or two 9mm bullets before your head explodes.&lt;br/&gt;&lt;br/&gt;Without this mask, Gage wouldn<span class="pl-cce">\&#39;</span>t be the wonderful human being he is today.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
        <td id="LC427" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_rambo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Troubled War Veteran<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
        <td id="LC428" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gage_rambo-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Troubled War Veteran is a mask that Gage has worked on for some time. Back in the Vietnam war Gage met this big-muscled guy who went nuts and started to use a bow instead of modern weapons.&lt;br/&gt;&lt;br/&gt;He died pretty early in the war, but for some strange reason Gage couldn<span class="pl-cce">\&#39;</span>t forget his face.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
        <td id="LC429" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Sniper</span></span></td>
      </tr>
      <tr>
        <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
        <td id="LC430" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>robberfly<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Asilidae<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
        <td id="LC431" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>robberfly-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Asilidae, also known as robber fly or assassin fly, are powerfully built, bristly flies who are known for their notoriously aggressive predatory habits. They feed on other insects and as a rule, they wait in ambush and catch their prey in flight.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
        <td id="LC432" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mantis<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sphodromantis<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
        <td id="LC433" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mantis-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The common name for these lovely little fellows is &quot;praying mantis&quot;. The reason? It refers to the prayer-like posture where it folds its fore-limbs. More commonly however it<span class="pl-cce">\&#39;</span>s referred to as the preying mantis, because of it<span class="pl-cce">\&#39;</span>s nature.&lt;br/&gt;&lt;br/&gt;Basically, they eat anything they can successfully capture and devour.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
        <td id="LC434" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spider<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tarantula<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
        <td id="LC435" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spider-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Eight legs strong, tarantula sizes range from as small as a fingernail to as large as a handgun when the legs are fully extended. The name originally comes from the name Lycosa tarantula, a species of wolf spider. Tarantulas generally hunt in trees, on or near the ground. They<span class="pl-cce">\&#39;</span>re also popular as pets.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
        <td id="LC436" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wasp<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Vespula<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
        <td id="LC437" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wasp-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Two pairs of wings, an ovipositor or stinger, no thickened hairs and a pair of talons. That<span class="pl-cce">\&#39;</span>s the wasp for you. Almost every pest insect species has at least one wasp species that preys upon it or parasitizes it. This makes the wasps very important in natural control of their numbers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
        <td id="LC438" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Shotgun</span></span></td>
      </tr>
      <tr>
        <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
        <td id="LC439" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>orangutang<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rutger<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
        <td id="LC440" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>orangutang-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rutger the motherfucking Orangutan. If you<span class="pl-cce">\&#39;</span>re strolling down the jungle and suddenly face an orang-utan, you<span class="pl-cce">\&#39;</span>re in trouble. Statistics show that one orang-utan is more dangerous than ten hobos with shotguns&lt;br/&gt;&lt;br/&gt;You remember that movie about dinosaurs with the big dinosaur in the end saving the kids? Know who killed the dinosaur after the credits? The kids did, but you know who killed the kids? Rutger the motherfucking orangutan did.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
        <td id="LC441" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silverback<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Steven<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
        <td id="LC442" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silverback-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Steven the Silverback Gorilla. Not only is he fucking huge, he<span class="pl-cce">\&#39;</span>s strong as hell too. He can break your back by just looking at you. You<span class="pl-cce">\&#39;</span>ll be hospitalized for weeks. Not only that, but there<span class="pl-cce">\&#39;</span>ll be months of therapy as well. Do you know how hard it is learning to walk again?&lt;br/&gt;&lt;br/&gt;Want to know what else is hard? Steven<span class="pl-cce">\&#39;</span>s muscles. 22 years ago he worked as a chef on a military ship. Killed everyone in 103 minutes.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
        <td id="LC443" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mandril<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>John<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
        <td id="LC444" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mandril-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>John the Mandrill Monkey. Mandrills are closely related to baboons and even more to the drill. Not the kind of drill you use in a bank robbery, but the monkey drill, silly you!&lt;br/&gt;&lt;br/&gt;John is a monkey know for his sardonic one-liners, include the catch phrase &quot;unidentified monkey screech&quot;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
        <td id="LC445" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullmonkey<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Clint<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
        <td id="LC446" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullmonkey-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Clint the Black-Capped Squirrel Monkey. Not really a monkey without a name. Just like the real Clint, this monkey doesn<span class="pl-cce">\&#39;</span>t fuck around. It minds its own business.&lt;br/&gt;&lt;br/&gt;Doesn<span class="pl-cce">\&#39;</span>t talk unless talked to, knowing that the less it says the stronger it becomes. When it actually tries to say something it ends up screeching because it<span class="pl-cce">\&#39;</span>s a FUCKING MONKEY.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
        <td id="LC447" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Assault Pack</span></span></td>
      </tr>
      <tr>
        <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
        <td id="LC448" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>crowgoblin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crow Goblin<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
        <td id="LC449" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>crowgoblin-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>For the longest time ever no one knew who the real identity behind the Crow Goblin was. Twenty years later people found out, but it was unsatisfactory so they said that that person was an imposter or something. The real Crow Goblin was someone else.&lt;br/&gt;&lt;br/&gt;I don<span class="pl-cce">\&#39;</span>t want to bore you with the rest of it but the mask looks pretty nice, yeah? It<span class="pl-cce">\&#39;</span>s got a purple hat, or maybe it<span class="pl-cce">\&#39;</span>s a hoodie, I don<span class="pl-cce">\&#39;</span>t know. It sports a pretty cool grin and some thread sewn across its face. I wonder who hides behind the mask though.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
        <td id="LC450" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>evil<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Black Death<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
        <td id="LC451" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>evil-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bob Robertson worked at a purple stuff factory. The purple stuff factory was old and in need of reperations. Bob mentioned this to his supervisors but they ignored him. Bob kept on hardly working, playing pre-installed games on his operative system. One day when he was checking out early, cracks started to form in a container filled with purple stuff. Just when he went past, the container burst and Bob was drenched in purple stuff.&lt;br/&gt;&lt;br/&gt;When he got out of hospital, he had become a super villain. His face has been purple ever since.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
        <td id="LC452" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>galax<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Professor Wrath<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
        <td id="LC453" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>galax-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Milhouse Anderson worked at a chemical plant handling dangerous chemical waste. As a prank, his friends thought it would be a good idea to lock him up in the room where they kept the dangerous chemical waste. What they didn<span class="pl-cce">\&#39;</span>t know was that the dangerous chemical waste was dangerous, and while being locked in for several hours, Milhouse was exposed to high levels of radiation and other bad stuff.&lt;br/&gt;&lt;br/&gt;When they finally let him out, he had become a super villain. He<span class="pl-cce">\&#39;</span>s been super angry ever since.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
        <td id="LC454" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>volt<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Volt<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
        <td id="LC455" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>volt-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Being a snoopy lowlife, janitor David Davidson snuck around the military research facility he worked at, looking for something easy to steal. He found a door that he didn<span class="pl-cce">\&#39;</span>t have a key for. Curious, he kicked the door open and was instantly attacked by some kind of bright light. Somehow he survived the attack and got superhuman powers.&lt;br/&gt;&lt;br/&gt;With his new powers, he called himself Volt.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
        <td id="LC456" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Gage Historical Pack</span></span></td>
      </tr>
      <tr>
        <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
        <td id="LC457" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>churchill<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>British Bulldog<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
        <td id="LC458" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>churchill-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Politician, prize winner, owner of many medals and the first honorary citizen of the United States of America. By some it was said that he had a flawed character, saying; &quot;never had people admired and despised a man simultaneously to the same extent; never had such opposite extremes been combined in the same human being.&quot;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
        <td id="LC459" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>de_gaulle<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Constable<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
        <td id="LC460" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>de_gaulle-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>For much between 1940-1969, the Constable was the dominant military and political leader of France. Refusing to accept his government<span class="pl-cce">\&#39;</span>s armistice with the German invaders in 1940, he set up his base in London, proclaimed himself the incarnation of France, and created the Free French movement. During the war he rallied the overseas colonies, especially those in Africa, organized the Resistance from abroad, and struggled to gain full recognition from the British and Americans.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
        <td id="LC461" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>patton<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Old Blood and Guts<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
        <td id="LC462" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>patton-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>One of the bravest men I saw in the African campaign was on a telegraph pole in the midst of furious fire while we were moving toward Tunis. I stopped and asked him what the hell he was doing up there. He answered, <span class="pl-cce">\&#39;</span>Fixing the wire, sir.<span class="pl-cce">\&#39;</span> <span class="pl-cce">\&#39;</span>Isn<span class="pl-cce">\&#39;</span>t it a little unhealthy up there right now?<span class="pl-cce">\&#39;</span> I asked. <span class="pl-cce">\&#39;</span>Yes sir, but this goddamn wire has got to be fixed.<span class="pl-cce">\&#39;</span> I asked, <span class="pl-cce">\&#39;</span>Don<span class="pl-cce">\&#39;</span>t those planes strafing the road bother you?<span class="pl-cce">\&#39;</span> And he answered, <span class="pl-cce">\&#39;</span>No sir, but you sure as hell do.<span class="pl-cce">\&#39;</span>&lt;br/&gt;&lt;br/&gt;Now, there was a real soldier. A real man. A man who devoted all he had to his duty, no matter how great the odds, no matter how seemingly insignificant his duty appeared at the time.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
        <td id="LC463" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>red_hurricane<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Read Bear<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
        <td id="LC464" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>red_hurricane-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>&quot;In Soviet Russia, Red Bear kills you.&quot; No one knows exactly who the Red Bear was; some say he was just a myth, a symbol of the motherland and everything that was strong, combined into one being. Only the stories are known and told again and again. Like that one time, when he killed a bunch of bears and came back home all in red, drenched in blood.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
        <td id="LC465" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Official Soundtrack</span></span></td>
      </tr>
      <tr>
        <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
        <td id="LC466" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tcn<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Criminal Ambitions<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
        <td id="LC467" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tcn-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A mask only for the most ambitious heister.&lt;br/&gt;&lt;br/&gt;Take all the loot, leave nothing behind.&lt;br/&gt;This is the sign of a true criminal mind.&lt;br/&gt;Grab all the diamonds and small additions.&lt;br/&gt;Now you<span class="pl-cce">\&#39;</span>re a person with criminal ambitions.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
        <td id="LC468" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>metalhead<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Metalhead<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
        <td id="LC469" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>metalhead-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The origin of the Metalhead is unclear.&lt;br/&gt;&lt;br/&gt;It looks more of a helmet than a mask. It has spikes pointing out of it and looks very much like a pimped out gas mask made of iron. It<span class="pl-cce">\&#39;</span>s unclear if it protects the wearer from any gas or melee weapons however.&lt;br/&gt;&lt;br/&gt;It looks pretty rad though.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
        <td id="LC470" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>optimist_prime<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Optimist<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
        <td id="LC471" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>optimist_prime-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>&quot;Be the change you want to see in the world.&quot;&lt;br/&gt;&lt;br/&gt;That<span class="pl-cce">\&#39;</span>s what the Optimist believes.&lt;br/&gt;&lt;br/&gt;As the leader of a peaceful group of robots, he feels it is his responsibility to combat rival bands of robots obsessed with negativity and extermination. His prime weapon: rolling out positivity &lt;br/&gt;&lt;br/&gt;through constructive reasoning and unbiased logic.&lt;br/&gt;&lt;br/&gt;Or through forced upgrades. Which are compulsory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
        <td id="LC472" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>surprise<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>War Face<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
        <td id="LC473" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>surprise-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You got a war face! AAAAAAAAHH! That<span class="pl-cce">\&#39;</span>s a war face, let me see your war face!&lt;br/&gt;&lt;br/&gt;...&lt;br/&gt;&lt;br/&gt;Bullshit. You didn<span class="pl-cce">\&#39;</span>t convince me, let me see your REAL war face!&lt;br/&gt;&lt;br/&gt;...Actually, that one<span class="pl-cce">\&#39;</span>s pretty good...<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
        <td id="LC474" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Big Bank</span></span></td>
      </tr>
      <tr>
        <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
        <td id="LC475" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lincoln<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>16th<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
        <td id="LC476" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lincoln-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lawyer, Commander-In-Chief, father. Had an ambition to serve this great nation for 8 years.&lt;br/&gt;&lt;br/&gt; Consistently ranked by scholars and the public as one of the greatest U.S. presidents of all time.&lt;br/&gt;&lt;br/&gt; The 16th is one of the most beloved presidents in history. Among criminals, he remains well respected.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
        <td id="LC477" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>grant<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>18th<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
        <td id="LC478" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>grant-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Soldier, Commander-In-Chief, father. Served this great nation for 8 years.&lt;br/&gt;&lt;br/&gt;A protector and a warrior, and a great one at that.&lt;br/&gt;&lt;br/&gt;The 18th was one of the most unpopular presidents in history. Among criminals however, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
        <td id="LC479" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>washington<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>1st<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
        <td id="LC480" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>washington-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>General of the Armies, Commander-In-Chief,  Founding Father. Served this great nation for 8 years.&lt;br/&gt;&lt;br/&gt;The first ever president, and a great one at that.&lt;br/&gt;&lt;br/&gt;The 1st was one of the most popular presidents in history and the face of the $1 bill. Among criminals, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
        <td id="LC481" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>franklin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>First American<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
        <td id="LC482" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>franklin-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Worlds-renowned polymath, author, printer, political theorist, postmaster, scientist, inventor, civic activist, statesman, diplomat, Founding Father.&lt;br/&gt;&lt;br/&gt; Titulated as &quot;The First American&quot; and the face of the $100 bill.&lt;br/&gt;&lt;br/&gt;Among criminals, he remains extremely popular.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
        <td id="LC483" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Twisted Metal</span></span></td>
      </tr>
      <tr>
        <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
        <td id="LC484" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sweettooth<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sweettooth<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
        <td id="LC485" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sweettooth-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sweet Tooth, real name Marcus &quot;Needles&quot; Kane is a character from the Twisted Metal video game series. Sweet Tooth is best known for being a killer clown that drives a combat ice cream truck.&lt;br/&gt;&lt;br/&gt;It<span class="pl-cce">\&#39;</span>s said that he once had escaped from a mental institution. He now leads a life of crime.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
        <td id="LC486" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Halloween 2013</span></span></td>
      </tr>
      <tr>
        <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
        <td id="LC487" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>frank<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Frank<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
        <td id="LC488" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>frank-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Frank is a monster, but he is - contrary to popular believe - a sensitive, emotional creature whose only aim is to share his life with another monster.&lt;br/&gt;&lt;br/&gt;However, he realized from the moment of this &quot;birth&quot; that even his own creator cannot stand being around him. Knowing this, Frank decided to become a bank robber instead. The End.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L489" class="blob-num js-line-number" data-line-number="489"></td>
        <td id="LC489" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pumpkin_king<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pumpkin King<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L490" class="blob-num js-line-number" data-line-number="490"></td>
        <td id="LC490" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pumpkin_king-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Legend has it that a boy named Jack was getting chased by some villagers from whom he had stolen, when he suddenly bumped into the Devil.&lt;br/&gt;&lt;br/&gt;Jack was a clever little heister and managed to convince the Devil that the loot he was carrying was worth to be shared. The Devil agreed and the two ran to the escape horses and got away.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L491" class="blob-num js-line-number" data-line-number="491"></td>
        <td id="LC491" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>venomorph<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Venomorph<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L492" class="blob-num js-line-number" data-line-number="492"></td>
        <td id="LC492" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>venomorph-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you see the Venomorph, you know it<span class="pl-cce">\&#39;</span>s game over, man. GAME OVER! Maybe you can build a fire, try sing a couple of songs.&lt;br/&gt;&lt;br/&gt;In reality, you better go back and hide, because it will be dark soon, and these babies mostly only come at night... Mostly.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L493" class="blob-num js-line-number" data-line-number="493"></td>
        <td id="LC493" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>witch<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Witch<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L494" class="blob-num js-line-number" data-line-number="494"></td>
        <td id="LC494" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>witch-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A witch is someone practising black witchcraft, often with the aid of a devil or familiar.&lt;br/&gt;&lt;br/&gt;It can be anything from an ugly old hag to a charming, alluring woman.&lt;br/&gt;&lt;br/&gt;And then you have the broom, the hat and all that. Boo.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L495" class="blob-num js-line-number" data-line-number="495"></td>
        <td id="LC495" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_angry<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Angry Baby<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L496" class="blob-num js-line-number" data-line-number="496"></td>
        <td id="LC496" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_angry-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GRRRRRRRR GRRR grrr grr grr GRRRR Wah, wah, WAAAAAAAAAAAH! GRRR! Grr.&lt;br/&gt;&lt;br/&gt;GRRRR grr GRRRR rawr GRRRRRRRRRRRR, wahh, WAH, WAH, WAH, GRRR.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L497" class="blob-num js-line-number" data-line-number="497"></td>
        <td id="LC497" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_cry<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cry Baby<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L498" class="blob-num js-line-number" data-line-number="498"></td>
        <td id="LC498" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_cry-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Waaaah, waah, wah, WAAAAAAAAAAAAAAAAAAH, wah, WAAAAAAAAH, WAAAAAAH!&lt;br/&gt;&lt;br/&gt;WAAAAAAAAAAAAAAAAAAAH, wah, WAAAAAAAAH, WAAAAAAAH, Waaaah, waah, wah. Wah, WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L499" class="blob-num js-line-number" data-line-number="499"></td>
        <td id="LC499" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_happy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Happy Baby<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L500" class="blob-num js-line-number" data-line-number="500"></td>
        <td id="LC500" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>baby_happy-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ffff, gaga, bo, gaga bo GAGA GAGA? GAGAGAGA? GAGA? Gagag GOGOGO GAGA? GAGA! GOGO! Bah. Gaga bah gogo go.&lt;br/&gt;&lt;br/&gt;GAGA? GAGA! GOGO! Bah. GAGAGA? GAGA GOGO GAGAGA? GAGA! Gagaga gogoga. Fff.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L501" class="blob-num js-line-number" data-line-number="501"></td>
        <td id="LC501" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brazil_baby<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brazil Baby<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L502" class="blob-num js-line-number" data-line-number="502"></td>
        <td id="LC502" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brazil_baby-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GAGA? GAGA! GOGO! Boo! GAGAGA? GAGA GOGO GAGAGA? GAGA? GAGA! GAGAGA? GAGA GAGAGA?&lt;br/&gt;&lt;br/&gt;GAGAGA? GAGAGAGOGO? Boo! BOOO! Gagagaga boo gaga.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L503" class="blob-num js-line-number" data-line-number="503"></td>
        <td id="LC503" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Twitch Pack</span></span></td>
      </tr>
      <tr>
        <td id="L504" class="blob-num js-line-number" data-line-number="504"></td>
        <td id="LC504" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ancient<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crossbreed<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L505" class="blob-num js-line-number" data-line-number="505"></td>
        <td id="LC505" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ancient-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A powerful alien race, described by some as the most advanced beings in the universe. Different races that have come in contact with them have different names for the Crossbreed.&lt;br/&gt;&lt;br/&gt;Strong, lean and intelligent, the Crossbreed takes the best from the DNA of each alien race that it meets, always making sure it evolves in the right direction.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L506" class="blob-num js-line-number" data-line-number="506"></td>
        <td id="LC506" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>twitch_orc<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Orc<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L507" class="blob-num js-line-number" data-line-number="507"></td>
        <td id="LC507" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>twitch_orc-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brutish, aggressive and generally repulsive, the orcs have always been a hated race. Orcs are larger stronger than their goblin cousins but smaller and less powerful than their ogre brethren.&lt;br/&gt;&lt;br/&gt;This particular purple-skinned orc came from the Stonetremble clan who were known for their fierce warriors and overpowered, hybrid shamans.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L508" class="blob-num js-line-number" data-line-number="508"></td>
        <td id="LC508" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Humble Halloween</span></span></td>
      </tr>
      <tr>
        <td id="L509" class="blob-num js-line-number" data-line-number="509"></td>
        <td id="LC509" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>the_one_below<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The One Below<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L510" class="blob-num js-line-number" data-line-number="510"></td>
        <td id="LC510" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>the_one_below-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The head is what remains of this aquatic horror from the old days, when dark lords ruled the lands and good men grew up only to die; when the summer was short and the winter felt like an eternity; when the One Below stepped out of the ocean and walked the earth.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L511" class="blob-num js-line-number" data-line-number="511"></td>
        <td id="LC511" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>werewolf<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lycanwulf<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L512" class="blob-num js-line-number" data-line-number="512"></td>
        <td id="LC512" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>werewolf-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>&quot;Lycanwulf, Lycanwulf!&quot; they yelled, the frightened villagers, as they laid eyes upon this abomination known as the Lycanwulf. The petty humans were now prisoners of the beast, in a prison without walls, ceilings or a key, where the only escape was death.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L513" class="blob-num js-line-number" data-line-number="513"></td>
        <td id="LC513" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Hotline Miami DLC</span></span></td>
      </tr>
      <tr>
        <td id="L514" class="blob-num js-line-number" data-line-number="514"></td>
        <td id="LC514" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pig<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Aubrey<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L515" class="blob-num js-line-number" data-line-number="515"></td>
        <td id="LC515" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pig-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Aubrey is a real gun lover.&lt;br/&gt;&lt;br/&gt;Large headed and long snouted Aubrey is a master of arms and knows nothing better than to kill using some fine weaponry.&lt;br/&gt;&lt;br/&gt;Pigs have pretty small lungs though so Aubrey can<span class="pl-cce">\&#39;</span>t run that far.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L516" class="blob-num js-line-number" data-line-number="516"></td>
        <td id="LC516" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>white_wolf<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dennis<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L517" class="blob-num js-line-number" data-line-number="517"></td>
        <td id="LC517" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>white_wolf-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dennis loves knives.&lt;br/&gt;&lt;br/&gt;The gray wolf is one of the best known and well researched animals on the entire planet. It was the first animal and only large carnivore to be domesticated by humans.&lt;br/&gt;&lt;br/&gt;Today, there<span class="pl-cce">\&#39;</span>s only one third of the population left because of human persecution.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L518" class="blob-num js-line-number" data-line-number="518"></td>
        <td id="LC518" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rabbit<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Graham<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L519" class="blob-num js-line-number" data-line-number="519"></td>
        <td id="LC519" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rabbit-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Graham enjoys long walks in the sun.&lt;br/&gt;&lt;br/&gt;Rabbits are small mammals that practically can be found anywhere. If confronted by a potential threat, rabbits will instantly freeze and warn others in the warren with powerful thumps on the ground.&lt;br/&gt;&lt;br/&gt;When fleeing, they hop in a zig-zag pattern, much like many Counter-Strike players do.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L520" class="blob-num js-line-number" data-line-number="520"></td>
        <td id="LC520" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>owl<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rasmus<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L521" class="blob-num js-line-number" data-line-number="521"></td>
        <td id="LC521" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>owl-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rasmus has an eye for secrets.&lt;br/&gt;&lt;br/&gt;Owls are nocturnal birds of prey. They are known for their large eyes in comparison to their skulls. They can<span class="pl-cce">\&#39;</span>t actually move their eyes, they swivel their heads instead and are able to swivel 270 degrees. Shit you didn<span class="pl-cce">\&#39;</span>t know, amirite.&lt;br/&gt;&lt;br/&gt;&quot;I don<span class="pl-cce">\&#39;</span>t know you!&quot; &quot;You<span class="pl-cce">\&#39;</span>re no guest of mine!&quot;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L522" class="blob-num js-line-number" data-line-number="522"></td>
        <td id="LC522" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Hotline Miami Game</span></span></td>
      </tr>
      <tr>
        <td id="L523" class="blob-num js-line-number" data-line-number="523"></td>
        <td id="LC523" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>panther<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brandon<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L524" class="blob-num js-line-number" data-line-number="524"></td>
        <td id="LC524" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>panther-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brandon has a thing for walking really, really fast.&lt;br/&gt;&lt;br/&gt;Brandon is a panther, and panthers are large cats. One funny thing is that only the tiger, lion, leopard and jaguar has the anatomical structure which enables them to roar. Poor panther.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L525" class="blob-num js-line-number" data-line-number="525"></td>
        <td id="LC525" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>horse<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Don Juan<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L526" class="blob-num js-line-number" data-line-number="526"></td>
        <td id="LC526" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>horse-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Don Juan loves slamming doors in.&lt;br/&gt;&lt;br/&gt;Knock, knock. Who<span class="pl-cce">\&#39;</span>s there? It<span class="pl-cce">\&#39;</span>s Don Juan. Prepare yourself.&lt;br/&gt;&lt;br/&gt;Pro tip: In Hotline Miami, you get 2200 points while performing ground kills against the wall when using this mask.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L527" class="blob-num js-line-number" data-line-number="527"></td>
        <td id="LC527" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rooster<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Richard<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L528" class="blob-num js-line-number" data-line-number="528"></td>
        <td id="LC528" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rooster-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Richard enjoys spending time with different personas and asking questions.&lt;br/&gt;&lt;br/&gt;Do you like hurting other people?&lt;br/&gt;&lt;br/&gt;Who is leaving messages on your answering machine?&lt;br/&gt;&lt;br/&gt;Where are you right now?&lt;br/&gt;&lt;br/&gt;Why are we having this conversation?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L529" class="blob-num js-line-number" data-line-number="529"></td>
        <td id="LC529" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tiger<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tony<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L530" class="blob-num js-line-number" data-line-number="530"></td>
        <td id="LC530" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tiger-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tony uses his fists of fury to beat the crap of anyone who messes with him.&lt;br/&gt;&lt;br/&gt;Tony was born in the 1970s and was of Italian-American nationality. Many people easily recognize Tony. Probably in part because of his Tiger mask, and in part because of his physical brutality when dealing with people he don<span class="pl-cce">\&#39;</span>t like.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L531" class="blob-num js-line-number" data-line-number="531"></td>
        <td id="LC531" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Shadow Raid</span></span></td>
      </tr>
      <tr>
        <td id="L532" class="blob-num js-line-number" data-line-number="532"></td>
        <td id="LC532" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>samurai<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Somen Mempo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L533" class="blob-num js-line-number" data-line-number="533"></td>
        <td id="LC533" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>samurai-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>In ancient Japan, samurai warriors wore somen masks to protect themselves in war and to incite fear in their enemies. Somen masks were tied to the large kabuto helmets, making the samurai look like demons from jigoku.&lt;br/&gt;&lt;br/&gt;No one knows what fierce and ruthless warrior wore this intimidating mask in the past. Now however, it is ready for battle once more.&lt;br/&gt;&lt;br/&gt;&quot;Boku no ikari wo osoreru&quot;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L534" class="blob-num js-line-number" data-line-number="534"></td>
        <td id="LC534" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Deathwish</span></span></td>
      </tr>
      <tr>
        <td id="L535" class="blob-num js-line-number" data-line-number="535"></td>
        <td id="LC535" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullhard<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hard Skull<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L536" class="blob-num js-line-number" data-line-number="536"></td>
        <td id="LC536" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullhard-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A strange thing, the human skull. Humans can often recognize a human skull, even if it<span class="pl-cce">\&#39;</span>s only partially shown. The human brain even has a specific region for it.&lt;br/&gt;&lt;br/&gt;You finished all heists on the Hard difficulty? What are you, some kind of pro? Maybe this mask will suit you after all.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L537" class="blob-num js-line-number" data-line-number="537"></td>
        <td id="LC537" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullveryhard<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Very Hard Skull<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L538" class="blob-num js-line-number" data-line-number="538"></td>
        <td id="LC538" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skullveryhard-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A strange thing, the human skull. Not that this skull looks that human any more. Humans can often recognize a human skull, even if it<span class="pl-cce">\&#39;</span>s only partially shown. The human brain even has a specific region for it. There<span class="pl-cce">\&#39;</span>s something strange with this skull though.&lt;br/&gt;&lt;br/&gt;You finished all heists on the Very Hard difficulty? What are you, some kind of monster? Maybe this mask will suit you after all.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L539" class="blob-num js-line-number" data-line-number="539"></td>
        <td id="LC539" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skulloverkill<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Overkill Skull<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L540" class="blob-num js-line-number" data-line-number="540"></td>
        <td id="LC540" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skulloverkill-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Holy Shit - what is this new devilry? Humans can often recognize a human skull, even if it<span class="pl-cce">\&#39;</span>s only partially shown. The human brain even has a specific region for it. This doesn<span class="pl-cce">\&#39;</span>t look like a human skull however.&lt;br/&gt;&lt;br/&gt;You finished all heists on the OVERKILL difficulty? What are you, some kind of pit fiend? Maybe this mask will suit you after all.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L541" class="blob-num js-line-number" data-line-number="541"></td>
        <td id="LC541" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skulloverkillplus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Death Wish Skull<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L542" class="blob-num js-line-number" data-line-number="542"></td>
        <td id="LC542" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>skulloverkillplus-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>OVERKILL salutes you, bringer of death, slayer of law enforcers and finisher of difficulties. Humans can often recognize a human skull, even if only partially shown. The human brain even has a specific region for it. This isn<span class="pl-cce">\&#39;</span>t a human skull however, this is something completely different.&lt;br/&gt;&lt;br/&gt;You finished all heists on the Death Wish difficulty? What are you, some kind of demon? Maybe this mask will suit you after all.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L543" class="blob-num js-line-number" data-line-number="543"></td>
        <td id="LC543" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Infamy</span></span></td>
      </tr>
      <tr>
        <td id="L544" class="blob-num js-line-number" data-line-number="544"></td>
        <td id="LC544" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>aviator<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Heat<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L545" class="blob-num js-line-number" data-line-number="545"></td>
        <td id="LC545" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>aviator-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Everyone loves a good pair of sunglasses.&lt;br/&gt;&lt;br/&gt;But only the cockiest, most wanted, cops be damned sons of bitches are crazy enough to rob a god-damn bank wearing<span class="pl-cce">\&#39;</span>em.&lt;br/&gt;&lt;br/&gt;That<span class="pl-cce">\&#39;</span>s you.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L546" class="blob-num js-line-number" data-line-number="546"></td>
        <td id="LC546" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>plague<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Plague Doctor<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L547" class="blob-num js-line-number" data-line-number="547"></td>
        <td id="LC547" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>plague-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A plague doctor mask for the Mastermind.&lt;br/&gt;&lt;br/&gt;In the word of the Bhagavad-Gita: &quot;Now I am become death, destroyer of worlds.&quot;&lt;br/&gt;&lt;br/&gt;Or at least, that was the art direction.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L548" class="blob-num js-line-number" data-line-number="548"></td>
        <td id="LC548" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>welder<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Butcher<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L549" class="blob-num js-line-number" data-line-number="549"></td>
        <td id="LC549" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>welder-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A truly legendary Enforcer mask.&lt;br/&gt;&lt;br/&gt;The story goes it was made for one of the premier hitters in the Pink Panther crew years back but he didn<span class="pl-cce">\&#39;</span>t have the guts to wear it. It<span class="pl-cce">\&#39;</span>d draw too much attention.&lt;br/&gt;&lt;br/&gt;Not your concern.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L550" class="blob-num js-line-number" data-line-number="550"></td>
        <td id="LC550" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smoker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Specialist<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L551" class="blob-num js-line-number" data-line-number="551"></td>
        <td id="LC551" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smoker-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Only a true Technician could come up with a mask like this.&lt;br/&gt;&lt;br/&gt;Featuring a state of the art air filtration system, the mask can double as a chemist<span class="pl-cce">\&#39;</span>s hood in those unlikely &quot;must cook meth&quot; scenarios.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L552" class="blob-num js-line-number" data-line-number="552"></td>
        <td id="LC552" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spectre<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Spectre<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L553" class="blob-num js-line-number" data-line-number="553"></td>
        <td id="LC553" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spectre-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This Ghost mask look like it<span class="pl-cce">\&#39;</span>s from the future and it might as well be.&lt;br/&gt;&lt;br/&gt;Full head protection, made out of carbon fibre and genetically engineered spider-silk. People might even mistake you for a high-end Moto GP rider.&lt;br/&gt;&lt;br/&gt;Last mistake they<span class="pl-cce">\&#39;</span>ll make.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L554" class="blob-num js-line-number" data-line-number="554"></td>
        <td id="LC554" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Infamous</span></span></td>
      </tr>
      <tr>
        <td id="L555" class="blob-num js-line-number" data-line-number="555"></td>
        <td id="LC555" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dallas<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dallas<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L556" class="blob-num js-line-number" data-line-number="556"></td>
        <td id="LC556" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dallas-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The mask that everyone fears.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L557" class="blob-num js-line-number" data-line-number="557"></td>
        <td id="LC557" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chains<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chains<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L558" class="blob-num js-line-number" data-line-number="558"></td>
        <td id="LC558" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chains-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The mask of Chains.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L559" class="blob-num js-line-number" data-line-number="559"></td>
        <td id="LC559" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hoxton<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hoxton<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L560" class="blob-num js-line-number" data-line-number="560"></td>
        <td id="LC560" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hoxton-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The mask of Hoxton.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L561" class="blob-num js-line-number" data-line-number="561"></td>
        <td id="LC561" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wolf<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Wolf<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L562" class="blob-num js-line-number" data-line-number="562"></td>
        <td id="LC562" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wolf-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The mask of Wolf.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L563" class="blob-num js-line-number" data-line-number="563"></td>
        <td id="LC563" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dallas_clean<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dallas Begins<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L564" class="blob-num js-line-number" data-line-number="564"></td>
        <td id="LC564" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dallas_clean-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This is a clean version of the iconic Dallas mask,before it was painted.&lt;br/&gt;&lt;br/&gt;Never liked how the original one turned out? This is your chance to change history.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L565" class="blob-num js-line-number" data-line-number="565"></td>
        <td id="LC565" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chains_clean<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chains Begins<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L566" class="blob-num js-line-number" data-line-number="566"></td>
        <td id="LC566" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chains_clean-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This is a clean version of the iconic Chains mask, before it was painted.&lt;br/&gt;&lt;br/&gt;Never liked how the original one turned out? This is your chance to change history.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L567" class="blob-num js-line-number" data-line-number="567"></td>
        <td id="LC567" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hoxton_clean<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hoxton Begins<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L568" class="blob-num js-line-number" data-line-number="568"></td>
        <td id="LC568" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hoxton_clean-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This is a clean version of the iconic Hoxton mask,before it was painted.&lt;br/&gt;&lt;br/&gt;Never liked how the original one turned out? This is your chance to change history.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L569" class="blob-num js-line-number" data-line-number="569"></td>
        <td id="LC569" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wolf_clean<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Wolf Begins<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L570" class="blob-num js-line-number" data-line-number="570"></td>
        <td id="LC570" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>wolf_clean-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This is a clean version of the iconic Wolf mask,before it was painted.&lt;br/&gt;&lt;br/&gt;Never liked how the original one turned out? This is your chance to change history.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L571" class="blob-num js-line-number" data-line-number="571"></td>
        <td id="LC571" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>anonymous<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Anonymous<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L572" class="blob-num js-line-number" data-line-number="572"></td>
        <td id="LC572" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>anonymous-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Don the mask, become anonymous and do as you wish.&lt;br/&gt;&lt;br/&gt;Do it because you mean it, do it because you were told to, or do it for the lulz.&lt;br/&gt;&lt;br/&gt;Do all the things that regular society will not allow you. Like robbing a bank.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L573" class="blob-num js-line-number" data-line-number="573"></td>
        <td id="LC573" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cthulhu<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cthulhu<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L574" class="blob-num js-line-number" data-line-number="574"></td>
        <td id="LC574" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cthulhu-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A mask with a hideous appearance, the very face of terror.&lt;br/&gt;&lt;br/&gt;They say that an evil beast has many names. That must be why this beast is known as Tulu, Clulu, Clooloo, Cthulu, C<span class="pl-cce">\&#39;</span>thulhu, Cighulu, Cathulu, C<span class="pl-cce">\&#39;</span>thlu among other names,&lt;br/&gt;&lt;br/&gt;Part human, part octopus and part dragon, this is one of the greatest evils known to man.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L575" class="blob-num js-line-number" data-line-number="575"></td>
        <td id="LC575" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dillinger_death_mask<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dillinger Death Mask<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L576" class="blob-num js-line-number" data-line-number="576"></td>
        <td id="LC576" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dillinger_death_mask-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>John Herbert Dillinger was a famous American bank robber.&lt;br/&gt;&lt;br/&gt;His gang robbed two dozen banks and even four police stations.&lt;br/&gt;&lt;br/&gt;Dillinger himself escaped jail twice and was widely known as one of the meanest motherfuckers in the depression-era United States.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L577" class="blob-num js-line-number" data-line-number="577"></td>
        <td id="LC577" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>grin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Grin<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L578" class="blob-num js-line-number" data-line-number="578"></td>
        <td id="LC578" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>grin-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>There once was a man and his brother.&lt;br/&gt;&lt;br/&gt;Together, they owned a successful company.&lt;br/&gt;&lt;br/&gt;One day, the man and his brother temporarily only had one client. The client got cold feet and wanted out. Rather than simply pulling out and having to pay a fine for breach of contract, the client starved the man and his brother<span class="pl-cce">\&#39;</span>s company to death.&lt;br/&gt;&lt;br/&gt;The Man and his brother lost everything, and it is said that this mask was the very image of the man<span class="pl-cce">\&#39;</span>s facial expression the day that he went mad.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L579" class="blob-num js-line-number" data-line-number="579"></td>
        <td id="LC579" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>old_hoxton<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hoxton Reborn<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L580" class="blob-num js-line-number" data-line-number="580"></td>
        <td id="LC580" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>old_hoxton-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Hoxton Reborn mask is a mask that Hoxton made while in prison. For him, it<span class="pl-cce">\&#39;</span>s  a symbol of everything he experienced in the past years while the PAYDAY gang kept on going without him. No one knows how his experiences in prison have changed him, and he won<span class="pl-cce">\&#39;</span>t talk about it when asked.&lt;br/&gt;&lt;br/&gt;All we can assume is that he has been changed forever, and that he is reborn into... Something different.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L581" class="blob-num js-line-number" data-line-number="581"></td>
        <td id="LC581" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Normal</span></span></td>
      </tr>
      <tr>
        <td id="L582" class="blob-num js-line-number" data-line-number="582"></td>
        <td id="LC582" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>alienware<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Alienware<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L583" class="blob-num js-line-number" data-line-number="583"></td>
        <td id="LC583" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>alienware-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Based on the visions of a madman who thought he saw an extraterrestrial being.&lt;br/&gt;&lt;br/&gt;It is strange though, as the powerful materials is not from anywhere on Earth.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L584" class="blob-num js-line-number" data-line-number="584"></td>
        <td id="LC584" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>babyrhino<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Baby Rhino<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L585" class="blob-num js-line-number" data-line-number="585"></td>
        <td id="LC585" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>babyrhino-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Who would not want to wear the head of a baby rhino. Is it not cute? Putting it on makes you feel a little stupid, maybe because how it looks.&lt;br/&gt;&lt;br/&gt;While wearing it, you are worried that it is a bit hard seeing through the mask. You will do fine as long as you do not wander off with your pig-headed friends.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L586" class="blob-num js-line-number" data-line-number="586"></td>
        <td id="LC586" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>biglips<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Big Lips<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L587" class="blob-num js-line-number" data-line-number="587"></td>
        <td id="LC587" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>biglips-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Throw someone a lip by wearing this mask.&lt;br/&gt;&lt;br/&gt;The thing that gets people is the two fleshy folds that surround the mouth of this mask, the biggest lips you ever saw.&lt;br/&gt;&lt;br/&gt;Open your mouth and say <span class="pl-cce">\&#39;</span>aaah<span class="pl-cce">\&#39;</span>, directed the bank robber.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L588" class="blob-num js-line-number" data-line-number="588"></td>
        <td id="LC588" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mr_sinister<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Blackhearted<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L589" class="blob-num js-line-number" data-line-number="589"></td>
        <td id="LC589" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mr_sinister-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Evil and treacherous in a haunting way, this mask is said to change the wearer in mysterious ways.&lt;br/&gt;&lt;br/&gt;Worn long enough, it is said it turns the wearers heart into a black one, filled with lust for black deeds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L590" class="blob-num js-line-number" data-line-number="590"></td>
        <td id="LC590" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brainiack<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brainiac<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L591" class="blob-num js-line-number" data-line-number="591"></td>
        <td id="LC591" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brainiack-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This is the mask of someone who has a lot on his mind.&lt;br/&gt;&lt;br/&gt;Putting on this mask sparks an excessive, almost explosive desire to learn more about crimes and how to commit them.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L592" class="blob-num js-line-number" data-line-number="592"></td>
        <td id="LC592" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullet<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bullet<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L593" class="blob-num js-line-number" data-line-number="593"></td>
        <td id="LC593" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullet-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Worried about getting shot in the face with a high powered firearm?&lt;br/&gt;&lt;br/&gt;Scared that you will get stomped by a bulldozer, cloaker and a shield at the same time?&lt;br/&gt;&lt;br/&gt;Wearing this mask will not help you, but you will get downed in style. The Bullet - out in Black Markets near you, right now!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L594" class="blob-num js-line-number" data-line-number="594"></td>
        <td id="LC594" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>day_of_the_dead<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Calaca<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L595" class="blob-num js-line-number" data-line-number="595"></td>
        <td id="LC595" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>day_of_the_dead-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A skeleton mask connected to the Mexican Day of the Dead festival.&lt;br/&gt;&lt;br/&gt;Origins have been traced back to Aztec imagery, but no one is really sure.&lt;br/&gt;&lt;br/&gt;Wearing the Calaca is all about finding the joy in death happening all around you. The death of others should be a joyous occasion!<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L596" class="blob-num js-line-number" data-line-number="596"></td>
        <td id="LC596" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_a<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cannula<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L597" class="blob-num js-line-number" data-line-number="597"></td>
        <td id="LC597" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_a-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This mask is made of strange materials, holding it feels awkward. Wearing it feels even stranger.&lt;br/&gt;&lt;br/&gt;Putting on the mask, you feel like an outsider, a foreigner, someone who constantly changes locations, staying away, not wanting to be recognized by anyone.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L598" class="blob-num js-line-number" data-line-number="598"></td>
        <td id="LC598" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clowncry<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crybaby<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L599" class="blob-num js-line-number" data-line-number="599"></td>
        <td id="LC599" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clowncry-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Is there anything sadder than a crying clown?&lt;br/&gt;&lt;br/&gt;Probably crying civilians, being shouted to the ground by a criminal wearing a horrific mask.&lt;br/&gt;&lt;br/&gt;Or maybe a bank manager with an empty vault.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L600" class="blob-num js-line-number" data-line-number="600"></td>
        <td id="LC600" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dripper<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dripper<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L601" class="blob-num js-line-number" data-line-number="601"></td>
        <td id="LC601" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dripper-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Dripper was made by atomization of a larger mass of liquid, somehow made into a hard material while retaining a smooth surface.&lt;br/&gt;&lt;br/&gt;Everyone who looks at it sees different things.&lt;br/&gt;&lt;br/&gt;What do you see?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L602" class="blob-num js-line-number" data-line-number="602"></td>
        <td id="LC602" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>irondoom<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Doctor Crime<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L603" class="blob-num js-line-number" data-line-number="603"></td>
        <td id="LC603" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>irondoom-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Doctor Mayhem is an American fictional character, a supervillain who appears in comic books by OVERKILL Comics.&lt;br/&gt;&lt;br/&gt;The character was created by writer-editor David Goldfarb and designed by artist Max Elmberg Sjöholm.&lt;br/&gt;&lt;br/&gt;He made his first appearance in &quot;The Amazing Career Criminals: The PAYDAY gang meets Doctor Mayhem!&quot;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L604" class="blob-num js-line-number" data-line-number="604"></td>
        <td id="LC604" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gagball<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gagball<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L605" class="blob-num js-line-number" data-line-number="605"></td>
        <td id="LC605" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gagball-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Take a walk on the submissive side with a gagball stuck to your face.&lt;br/&gt;&lt;br/&gt;People wear these for a variety of reasons, one being roleplays involving bondage. This isn<span class="pl-cce">\&#39;</span>t necessarily the case though, as gagballs apparently can be used in bank robberies too.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L606" class="blob-num js-line-number" data-line-number="606"></td>
        <td id="LC606" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>greek_tragedy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Greek Tragedy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L607" class="blob-num js-line-number" data-line-number="607"></td>
        <td id="LC607" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>greek_tragedy-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A mask that symbolizes all the parts in a greek tragedy.&lt;br/&gt;&lt;br/&gt;In old Greece, masks were used to worship the gods in ceremonial rites and celebrations.&lt;br/&gt;&lt;br/&gt;This particular mask summarizes every heist in existence; the anger of someone triggering the alarm, the joy of opening the vault and the tragedy of being caught.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L608" class="blob-num js-line-number" data-line-number="608"></td>
        <td id="LC608" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hockey<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hockey Mask<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L609" class="blob-num js-line-number" data-line-number="609"></td>
        <td id="LC609" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hockey-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A hockey mask is a mask worn by hockey goal-tenders to protect their heads from injury.&lt;br/&gt;&lt;br/&gt;It is also the iconic robber mask, hand-crafted using only high-quality materials. Instead of protecting you from pucks, it protects you from being recognized while going about, doing your thing.&lt;br/&gt;&lt;br/&gt;You know, the thing you do so well. Stealing.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L610" class="blob-num js-line-number" data-line-number="610"></td>
        <td id="LC610" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hog<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hog<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L611" class="blob-num js-line-number" data-line-number="611"></td>
        <td id="LC611" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hog-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You have a new message! *BEEP*&lt;br/&gt;&lt;br/&gt;Salutations, this is <span class="pl-cce">\&#39;</span>Almir<span class="pl-cce">\&#39;</span> at Overkill. The Mask that you ordered should be delivered by now...&lt;br/&gt;&lt;br/&gt;A list of instructions is included...&lt;br/&gt;&lt;br/&gt;Make sure that you read them carefully!&lt;br/&gt;&lt;br/&gt;Do you like hurting other people? Then this mask is for you.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L612" class="blob-num js-line-number" data-line-number="612"></td>
        <td id="LC612" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demon<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Horned Beast<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L613" class="blob-num js-line-number" data-line-number="613"></td>
        <td id="LC613" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demon-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A beast that came from the abyss.&lt;br/&gt;&lt;br/&gt;It has a lion<span class="pl-cce">\&#39;</span>s body, bear feet and a leopard<span class="pl-cce">\&#39;</span>s mouth.&lt;br/&gt;&lt;br/&gt;Not much else is know of this beast, nor who designed the mask.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L614" class="blob-num js-line-number" data-line-number="614"></td>
        <td id="LC614" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jaw<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Jaw<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L615" class="blob-num js-line-number" data-line-number="615"></td>
        <td id="LC615" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jaw-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Protect your glass chin with a metal jaw.&lt;br/&gt;&lt;br/&gt;The only thing you will be chewing from now on with your jaw is law enforcers, right?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L616" class="blob-num js-line-number" data-line-number="616"></td>
        <td id="LC616" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kawaii<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Kawaii<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L617" class="blob-num js-line-number" data-line-number="617"></td>
        <td id="LC617" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kawaii-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lovable, cute, adorable, cool and hip, charming, non-threatening, innocent, happy-go-lucky.&lt;br/&gt;&lt;br/&gt;These are words not commonly used in criminology.&lt;br/&gt;&lt;br/&gt;Because of you, they now are.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L618" class="blob-num js-line-number" data-line-number="618"></td>
        <td id="LC618" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demonictender<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Kenneth<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L619" class="blob-num js-line-number" data-line-number="619"></td>
        <td id="LC619" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demonictender-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A horrifying mask shaped like the head of a demon.&lt;br/&gt;&lt;br/&gt;Not much is known about it other than the name - Kenneth.&lt;br/&gt;&lt;br/&gt;Now, this vengeful spirit has returned to earth to haunt mankind once more.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L620" class="blob-num js-line-number" data-line-number="620"></td>
        <td id="LC620" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rubber_male<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mr Mannequin<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L621" class="blob-num js-line-number" data-line-number="621"></td>
        <td id="LC621" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rubber_male-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Male Mannequin.&lt;br/&gt;&lt;br/&gt;The face of an articulated doll used by tailors, dressmakers, artists, window-dressers and now bank robbers.&lt;br/&gt;&lt;br/&gt;They are most often used to display or fit clothing, but are also used to simulate how to teach first aid, CPR, tracheal intubation and now bank robbery.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L622" class="blob-num js-line-number" data-line-number="622"></td>
        <td id="LC622" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rubber_female<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mrs Mannequin<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L623" class="blob-num js-line-number" data-line-number="623"></td>
        <td id="LC623" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rubber_female-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Female Mannequin.&lt;br/&gt;&lt;br/&gt;The face of an articulated doll used by tailors, dressmakers, artists, window-dressers and now bank robbers.&lt;br/&gt;&lt;br/&gt;They are most often used to display or fit clothing, but are also used to simulate how to teach first aid, CPR, tracheal intubation and now bank robbery.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L624" class="blob-num js-line-number" data-line-number="624"></td>
        <td id="LC624" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>scarecrow<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mr Sackcloth<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L625" class="blob-num js-line-number" data-line-number="625"></td>
        <td id="LC625" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>scarecrow-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Discourage crows, sparrows and law enforcers from entering your field of terror.&lt;br/&gt;&lt;br/&gt;The legend goes that in distant lands, there lived a god who knew everything yet could not walk. The greed of man found the god and beheaded it, thinking they could gain its wisdom.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L626" class="blob-num js-line-number" data-line-number="626"></td>
        <td id="LC626" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tounge<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mr Smooth<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L627" class="blob-num js-line-number" data-line-number="627"></td>
        <td id="LC627" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>tounge-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This mask somehow simultaneously conveys and expresses opposing or contradictory feelings, beliefs, and motivations.&lt;br/&gt;&lt;br/&gt;Legends says that four creatures merged together, forming a greater entity with the face of this mask.&lt;br/&gt;&lt;br/&gt;To summarize, it is a scary fucking mask.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L628" class="blob-num js-line-number" data-line-number="628"></td>
        <td id="LC628" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>monkeybiss<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Monkey Business<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L629" class="blob-num js-line-number" data-line-number="629"></td>
        <td id="LC629" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>monkeybiss-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Worn by someone who does not take life that seriously.&lt;br/&gt;&lt;br/&gt;Because it is a mask of a monkey.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L630" class="blob-num js-line-number" data-line-number="630"></td>
        <td id="LC630" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mummy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mummy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L631" class="blob-num js-line-number" data-line-number="631"></td>
        <td id="LC631" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mummy-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The face of a mummy that has had its skin and organs preserved. Either intentional or incidental exposure to extreme cold (ice mummies!), low humidity, lack of air or chemicals might have caused this.&lt;br/&gt;&lt;br/&gt;Who knows what part of the world it is from? Having been preserved for the longest time, its ready to be exposed to the world again.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L632" class="blob-num js-line-number" data-line-number="632"></td>
        <td id="LC632" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>oni<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Oni<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L633" class="blob-num js-line-number" data-line-number="633"></td>
        <td id="LC633" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>oni-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Oni is a Japanese devil.&lt;br/&gt;&lt;br/&gt;They are hideous, gigantic ogre-like creatures that have sharp claws and two horns growing from their heads.&lt;br/&gt;&lt;br/&gt;Their skin may have any number of colors, though red and blue are the most common.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L634" class="blob-num js-line-number" data-line-number="634"></td>
        <td id="LC634" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_b<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Outlander<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L635" class="blob-num js-line-number" data-line-number="635"></td>
        <td id="LC635" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_b-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Have you ever had that feeling when you have no mouth but feel the urge to scream?&lt;br/&gt;&lt;br/&gt;That is how you are going to feel if you are a civilian looking at a criminal wearing this mask, pointing a gun at you, shouting you to the floor.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L636" class="blob-num js-line-number" data-line-number="636"></td>
        <td id="LC636" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_c<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Perfect Stranger<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L637" class="blob-num js-line-number" data-line-number="637"></td>
        <td id="LC637" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>outlandish_c-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The mask of a stranger in a strange land.&lt;br/&gt;&lt;br/&gt;Masks like these were used in a lost civilization, in war, on soldiers; ceremonially, for burial rites and for shamanistic ceremonies to drive away evil spirits.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L638" class="blob-num js-line-number" data-line-number="638"></td>
        <td id="LC638" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stonekisses<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pout<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L639" class="blob-num js-line-number" data-line-number="639"></td>
        <td id="LC639" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stonekisses-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The pout is a facial expression that humans can make.&lt;br/&gt;&lt;br/&gt;It is a protrusion of the lips, especially as an expression of sullen discontent.&lt;br/&gt;&lt;br/&gt;Who would not be discontent, having had their horns sawed off like that.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L640" class="blob-num js-line-number" data-line-number="640"></td>
        <td id="LC640" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>buha<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rage<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L641" class="blob-num js-line-number" data-line-number="641"></td>
        <td id="LC641" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>buha-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Probably one of the angriest looking clown masks you have ever seen.&lt;br/&gt;&lt;br/&gt;It almost puts Wolf<span class="pl-cce">\&#39;</span>s mask to shame.&lt;br/&gt;&lt;br/&gt;Almost.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L642" class="blob-num js-line-number" data-line-number="642"></td>
        <td id="LC642" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shogun<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shogun<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L643" class="blob-num js-line-number" data-line-number="643"></td>
        <td id="LC643" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shogun-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Don the mask and feel like a Japanese general from a distant past.&lt;br/&gt;&lt;br/&gt;It is said that this mask was the mask of a mad and desperate warrior, who rose above the ranks and became a great general, winning many battles.&lt;br/&gt;&lt;br/&gt;Common sense will not accomplish great things. You must become mad and desperate to do so.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L644" class="blob-num js-line-number" data-line-number="644"></td>
        <td id="LC644" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shrunken<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shrunken Head<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L645" class="blob-num js-line-number" data-line-number="645"></td>
        <td id="LC645" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shrunken-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ritually prepared, the cranium is removed from the head, eyes and mouth sewn shut. Boiled in hot water, dried with hot rocks and sand and moulded to keep the features of a human face.&lt;br/&gt;&lt;br/&gt;Taken by ship to the Americas by Westerns long ago, it now somehow has ended up in your possession.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L646" class="blob-num js-line-number" data-line-number="646"></td>
        <td id="LC646" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clown_56<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Starved<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L647" class="blob-num js-line-number" data-line-number="647"></td>
        <td id="LC647" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>clown_56-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>This mask has a hideous appearance, a bony facial structure and dehydrated skin.&lt;br/&gt;&lt;br/&gt;It is the kind of mask gives you nightmares.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L648" class="blob-num js-line-number" data-line-number="648"></td>
        <td id="LC648" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>troll<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Troll<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L649" class="blob-num js-line-number" data-line-number="649"></td>
        <td id="LC649" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>troll-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Now here is a troll that is tired of hiding under the bridge.&lt;br/&gt;&lt;br/&gt;Why not see the world, pillage a village, take the local inhabitants gold treasures and flee from the the angry mobs instead?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L650" class="blob-num js-line-number" data-line-number="650"></td>
        <td id="LC650" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dawn_of_the_dead<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Undead<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L651" class="blob-num js-line-number" data-line-number="651"></td>
        <td id="LC651" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dawn_of_the_dead-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>An undead is a being that is dead yet somehow behaves like it is still alive.&lt;br/&gt;&lt;br/&gt;Created in mysterious ways, this might as well be a zombie as it could be a Vampire.&lt;br/&gt;&lt;br/&gt;If you are going to rob a bank, why not scare the living hell out of people while doing so?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L652" class="blob-num js-line-number" data-line-number="652"></td>
        <td id="LC652" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>vampire<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Vampire<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L653" class="blob-num js-line-number" data-line-number="653"></td>
        <td id="LC653" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>vampire-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Vampire is a mythological undead creature, said to feed on the blood of the living.&lt;br/&gt;&lt;br/&gt;Vampires can appear as normal humans.&lt;br/&gt;&lt;br/&gt;When attacked they will reveal their vampire visage where their face changes and they grow fangs and pointed teeth.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L654" class="blob-num js-line-number" data-line-number="654"></td>
        <td id="LC654" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>zipper<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Zipper<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L655" class="blob-num js-line-number" data-line-number="655"></td>
        <td id="LC655" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>zipper-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The zipper mask consists of two parallel tracks of teeth that can be interlocked or separated by the pulling of a slide between them.&lt;br/&gt;&lt;br/&gt;Separate the zipper when you need to communicate.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L656" class="blob-num js-line-number" data-line-number="656"></td>
        <td id="LC656" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>zombie<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Zombie<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L657" class="blob-num js-line-number" data-line-number="657"></td>
        <td id="LC657" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>zombie-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>A zombie is an animated corpse that somehow has been brought to life again.&lt;br/&gt;&lt;br/&gt;Brains?<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L658" class="blob-num js-line-number" data-line-number="658"></td>
        <td id="LC658" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Default</span></span></td>
      </tr>
      <tr>
        <td id="L659" class="blob-num js-line-number" data-line-number="659"></td>
        <td id="LC659" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pref<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Preferred Characters<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L660" class="blob-num js-line-number" data-line-number="660"></td>
        <td id="LC660" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pref-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Equipping this mask slot will make you wear your preferred character<span class="pl-cce">\&#39;</span>s mask.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L661" class="blob-num js-line-number" data-line-number="661"></td>
        <td id="LC661" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Twister</span></span></td>
      </tr>
      <tr>
        <td id="L662" class="blob-num js-line-number" data-line-number="662"></td>
        <td id="LC662" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>twister<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mystery Man<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L663" class="blob-num js-line-number" data-line-number="663"></td>
        <td id="LC663" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>twister-description<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Who is behind this mask is a mystery.&lt;br/&gt;&lt;br/&gt;It could be someone unknown or somebody you<span class="pl-cce">\&#39;</span>ve known all along.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L664" class="blob-num js-line-number" data-line-number="664"></td>
        <td id="LC664" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Leave the div there. It colors the word red.</span></span></td>
      </tr>
      <tr>
        <td id="L665" class="blob-num js-line-number" data-line-number="665"></td>
        <td id="LC665" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pro<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>&lt;div style=&quot;display:inline; color:#ff3336;&quot;&gt;Pro&lt;/div&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L666" class="blob-num js-line-number" data-line-number="666"></td>
        <td id="LC666" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Heists</span></span></td>
      </tr>
      <tr>
        <td id="L667" class="blob-num js-line-number" data-line-number="667"></td>
        <td id="LC667" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>frame<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Framing Frame<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L668" class="blob-num js-line-number" data-line-number="668"></td>
        <td id="LC668" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dogs<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Watchdogs<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L669" class="blob-num js-line-number" data-line-number="669"></td>
        <td id="LC669" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fire<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Firestarter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L670" class="blob-num js-line-number" data-line-number="670"></td>
        <td id="LC670" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rats<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rats<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L671" class="blob-num js-line-number" data-line-number="671"></td>
        <td id="LC671" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>election<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Election Day<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L672" class="blob-num js-line-number" data-line-number="672"></td>
        <td id="LC672" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fourstores<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Four Stores<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L673" class="blob-num js-line-number" data-line-number="673"></td>
        <td id="LC673" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nightclub<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nightclub<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L674" class="blob-num js-line-number" data-line-number="674"></td>
        <td id="LC674" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>mallcrasher<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mallcrasher<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L675" class="blob-num js-line-number" data-line-number="675"></td>
        <td id="LC675" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>diamond-store<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Diamond Store<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L676" class="blob-num js-line-number" data-line-number="676"></td>
        <td id="LC676" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shadowraid<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shadow Raid<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L677" class="blob-num js-line-number" data-line-number="677"></td>
        <td id="LC677" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bank-deposit<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bank: Deposit<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L678" class="blob-num js-line-number" data-line-number="678"></td>
        <td id="LC678" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bank-cash<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bank: Cash<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L679" class="blob-num js-line-number" data-line-number="679"></td>
        <td id="LC679" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bank-gold<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bank: Gold<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L680" class="blob-num js-line-number" data-line-number="680"></td>
        <td id="LC680" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bank<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bank<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L681" class="blob-num js-line-number" data-line-number="681"></td>
        <td id="LC681" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>go-bank<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>GO Bank<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L682" class="blob-num js-line-number" data-line-number="682"></td>
        <td id="LC682" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>big-bank<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Big Bank<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L683" class="blob-num js-line-number" data-line-number="683"></td>
        <td id="LC683" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>jewelry-store<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Jewelry Store<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L684" class="blob-num js-line-number" data-line-number="684"></td>
        <td id="LC684" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nightmare<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Safe House Nightmare<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L685" class="blob-num js-line-number" data-line-number="685"></td>
        <td id="LC685" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>big-oil<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Big Oil<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L686" class="blob-num js-line-number" data-line-number="686"></td>
        <td id="LC686" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ukrainian<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ukrainian Job<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L687" class="blob-num js-line-number" data-line-number="687"></td>
        <td id="LC687" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transport-harbor<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armored Transport: Harbor<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L688" class="blob-num js-line-number" data-line-number="688"></td>
        <td id="LC688" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transport-park<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armored Transport: Park<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L689" class="blob-num js-line-number" data-line-number="689"></td>
        <td id="LC689" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transport-downtown<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armored Transport: Downtown<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L690" class="blob-num js-line-number" data-line-number="690"></td>
        <td id="LC690" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transport-underpass<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armored Transport: Underpass<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L691" class="blob-num js-line-number" data-line-number="691"></td>
        <td id="LC691" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transport-crossroads<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Armored Transport: Crossroads<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L692" class="blob-num js-line-number" data-line-number="692"></td>
        <td id="LC692" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hotline<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hotline Miami<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L693" class="blob-num js-line-number" data-line-number="693"></td>
        <td id="LC693" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>artgallery<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Art Gallery<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L694" class="blob-num js-line-number" data-line-number="694"></td>
        <td id="LC694" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hoxtonbreakout<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hoxton Breakout<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L695" class="blob-num js-line-number" data-line-number="695"></td>
        <td id="LC695" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Escapes</span></span></td>
      </tr>
      <tr>
        <td id="L696" class="blob-num js-line-number" data-line-number="696"></td>
        <td id="LC696" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapeparknight<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Park (Night)<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L697" class="blob-num js-line-number" data-line-number="697"></td>
        <td id="LC697" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapeparkday<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Park (Day)<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L698" class="blob-num js-line-number" data-line-number="698"></td>
        <td id="LC698" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapecafenight<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cafe (Night)<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L699" class="blob-num js-line-number" data-line-number="699"></td>
        <td id="LC699" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapecafeday<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cafe (Day)<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L700" class="blob-num js-line-number" data-line-number="700"></td>
        <td id="LC700" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapestreet<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Street<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L701" class="blob-num js-line-number" data-line-number="701"></td>
        <td id="LC701" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapeoverpass<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Overpass<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L702" class="blob-num js-line-number" data-line-number="702"></td>
        <td id="LC702" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>escapegarage<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Garage<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L703" class="blob-num js-line-number" data-line-number="703"></td>
        <td id="LC703" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">////Skilltrees</span></span></td>
      </tr>
      <tr>
        <td id="L704" class="blob-num js-line-number" data-line-number="704"></td>
        <td id="LC704" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Mastermind</span></span></td>
      </tr>
      <tr>
        <td id="L705" class="blob-num js-line-number" data-line-number="705"></td>
        <td id="LC705" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>controlfreak<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hostage Taker<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L706" class="blob-num js-line-number" data-line-number="706"></td>
        <td id="LC706" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>controlfreak-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Having at least one hostage makes you regenerate &lt;div class=&quot;bluein&quot;&gt;0.6%&lt;/div&gt; health every &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L707" class="blob-num js-line-number" data-line-number="707"></td>
        <td id="LC707" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>controlfreak-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Having at least one hostage makes you regenerate &lt;div class=&quot;bluein&quot;&gt;2%&lt;/div&gt; health every &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L708" class="blob-num js-line-number" data-line-number="708"></td>
        <td id="LC708" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pistolmessiah<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pistol Messiah<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L709" class="blob-num js-line-number" data-line-number="709"></td>
        <td id="LC709" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pistolmessiah-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When in bleedout, you are instantly revived if you kill an enemy with a pistol. You only have &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; charge. You will replenish your charge when you get out of custody.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L710" class="blob-num js-line-number" data-line-number="710"></td>
        <td id="LC710" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pistolmessiah-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain an additional &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; charges. You will replenish your charges when you get out of custody.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L711" class="blob-num js-line-number" data-line-number="711"></td>
        <td id="LC711" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>inspire<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Inspire<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L712" class="blob-num js-line-number" data-line-number="712"></td>
        <td id="LC712" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>inspire-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You revive crew members &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; faster. Shouting at your team-mates will increase their movement speed by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; for &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L713" class="blob-num js-line-number" data-line-number="713"></td>
        <td id="LC713" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>inspire-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>There is a &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt; chance that you can revive crew members at a distance by shouting at them.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L714" class="blob-num js-line-number" data-line-number="714"></td>
        <td id="LC714" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blackmarketeer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Partner in Crime<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L715" class="blob-num js-line-number" data-line-number="715"></td>
        <td id="LC715" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blackmarketeer-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Having a converted enemy increases your movement speed by &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt;. Your converted enemy takes &lt;div class=&quot;bluein&quot;&gt;40%&lt;/div&gt; less damage<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L716" class="blob-num js-line-number" data-line-number="716"></td>
        <td id="LC716" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blackmarketeer-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Having a converted enemy increases your health by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;. Your converted enemy takes an additional &lt;div class=&quot;bluein&quot;&gt;40%&lt;/div&gt; less damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L717" class="blob-num js-line-number" data-line-number="717"></td>
        <td id="LC717" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gunslinger<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gunslinger<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L718" class="blob-num js-line-number" data-line-number="718"></td>
        <td id="LC718" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gunslinger-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You reload pistols &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L719" class="blob-num js-line-number" data-line-number="719"></td>
        <td id="LC719" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>gunslinger-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You deal &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; additional damage with pistols.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L720" class="blob-num js-line-number" data-line-number="720"></td>
        <td id="LC720" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kilmer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Kilmer<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L721" class="blob-num js-line-number" data-line-number="721"></td>
        <td id="LC721" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kilmer-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your reload speed with assault rifles and sniper rifles by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L722" class="blob-num js-line-number" data-line-number="722"></td>
        <td id="LC722" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>kilmer-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapon accuracy while moving with assault rifles and sniper rifles is increased by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.&lt;br/&gt;&lt;br/&gt;Run and Reload - you can reload your weapons while sprinting.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L723" class="blob-num js-line-number" data-line-number="723"></td>
        <td id="LC723" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stockholmsyndrome<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Stockholm Syndrome<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L724" class="blob-num js-line-number" data-line-number="724"></td>
        <td id="LC724" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stockholmsyndrome-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nearby civilians have a chance of reviving you if you interact with them.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L725" class="blob-num js-line-number" data-line-number="725"></td>
        <td id="LC725" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stockholmsyndrome-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Civilians reviving you have a chance of giving you ammunition.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L726" class="blob-num js-line-number" data-line-number="726"></td>
        <td id="LC726" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatdoctor<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Combat Doctor<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L727" class="blob-num js-line-number" data-line-number="727"></td>
        <td id="LC727" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatdoctor-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now place &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; doctor bags instead of just one.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L728" class="blob-num js-line-number" data-line-number="728"></td>
        <td id="LC728" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatdoctor-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your doctor bags have &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; additional charges each.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L729" class="blob-num js-line-number" data-line-number="729"></td>
        <td id="LC729" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>joker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Joker<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L730" class="blob-num js-line-number" data-line-number="730"></td>
        <td id="LC730" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>joker-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can convert a non-special enemy to fight on your side. This cannot be done during stealth and the enemy must have surrendered in order for you to convert it.&lt;br/&gt;&lt;br/&gt;You can only convert one non-special enemy at a time.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L731" class="blob-num js-line-number" data-line-number="731"></td>
        <td id="LC731" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>joker-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The converted enemy gains &lt;div class=&quot;bluein&quot;&gt;55%&lt;/div&gt; more health and deals &lt;div class=&quot;bluein&quot;&gt;45%&lt;/div&gt; more damage.&lt;br/&gt;&lt;br/&gt;The time to convert an enemy is reduced by &lt;div class=&quot;bluein&quot;&gt;65%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L732" class="blob-num js-line-number" data-line-number="732"></td>
        <td id="LC732" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spotter<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Spotter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L733" class="blob-num js-line-number" data-line-number="733"></td>
        <td id="LC733" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spotter-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Special enemies marked by you take &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; additional damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L734" class="blob-num js-line-number" data-line-number="734"></td>
        <td id="LC734" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>spotter-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocks the Spotter asset in the Job Overview menu.&lt;br/&gt;&lt;br/&gt;During stealth the Spotter will highlight guards for you and your crew.&lt;br/&gt;&lt;br/&gt;If stealth is not an option, the Spotter will highlight special enemies for you and your crew.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L735" class="blob-num js-line-number" data-line-number="735"></td>
        <td id="LC735" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>equilibrium<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Equilibrium<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L736" class="blob-num js-line-number" data-line-number="736"></td>
        <td id="LC736" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>equilibrium-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases accuracy with pistols by &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; and decreases the time it takes to pull and put away pistols by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L737" class="blob-num js-line-number" data-line-number="737"></td>
        <td id="LC737" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>equilibrium-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your rate of fire with pistols by &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L738" class="blob-num js-line-number" data-line-number="738"></td>
        <td id="LC738" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dominator<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dominator<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L739" class="blob-num js-line-number" data-line-number="739"></td>
        <td id="LC739" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dominator-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You and your crew can now intimidate a non-special enemy. Less well trained enemies are easier to intimidate.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L740" class="blob-num js-line-number" data-line-number="740"></td>
        <td id="LC740" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>dominator-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The power and range of your intimidation is increased by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L741" class="blob-num js-line-number" data-line-number="741"></td>
        <td id="LC741" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>insideman<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Control Freak<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L742" class="blob-num js-line-number" data-line-number="742"></td>
        <td id="LC742" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>insideman-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Civilians remain intimidated &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; longer.&lt;br/&gt;&lt;br/&gt;Noise created by you intimidates civilians<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L743" class="blob-num js-line-number" data-line-number="743"></td>
        <td id="LC743" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>insideman-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocks special Inside Man assets in the Job Overview menu.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L744" class="blob-num js-line-number" data-line-number="744"></td>
        <td id="LC744" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fastlearner<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pain Killers<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L745" class="blob-num js-line-number" data-line-number="745"></td>
        <td id="LC745" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fastlearner-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crew members you revive take &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; less damage for &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; seconds<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L746" class="blob-num js-line-number" data-line-number="746"></td>
        <td id="LC746" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fastlearner-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The damage reduction is increased by an additional &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L747" class="blob-num js-line-number" data-line-number="747"></td>
        <td id="LC747" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>leadership<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Leadership<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L748" class="blob-num js-line-number" data-line-number="748"></td>
        <td id="LC748" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>leadership-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You and your crew<span class="pl-cce">\&#39;</span>s weapon stability with pistols is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L749" class="blob-num js-line-number" data-line-number="749"></td>
        <td id="LC749" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>leadership-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You and your crew<span class="pl-cce">\&#39;</span>s weapon stability with all weapons is increased by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L750" class="blob-num js-line-number" data-line-number="750"></td>
        <td id="LC750" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cableguy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cable Guy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L751" class="blob-num js-line-number" data-line-number="751"></td>
        <td id="LC751" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cableguy-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can cable tie hostages &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L752" class="blob-num js-line-number" data-line-number="752"></td>
        <td id="LC752" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cableguy-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your supply of cable ties from &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; to &lt;div class=&quot;bluein&quot;&gt;6&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L753" class="blob-num js-line-number" data-line-number="753"></td>
        <td id="LC753" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatmedic<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Combat Medic<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L754" class="blob-num js-line-number" data-line-number="754"></td>
        <td id="LC754" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatmedic-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>After you have revived a crew member, you receive a &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; damage bonus for &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L755" class="blob-num js-line-number" data-line-number="755"></td>
        <td id="LC755" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatmedic-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Reviving a crew member gives them &lt;div class=&quot;bluein&quot;&gt;30%&lt;/div&gt; more health.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L756" class="blob-num js-line-number" data-line-number="756"></td>
        <td id="LC756" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>endurance<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Endurance<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L757" class="blob-num js-line-number" data-line-number="757"></td>
        <td id="LC757" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>endurance-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your stamina by &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L758" class="blob-num js-line-number" data-line-number="758"></td>
        <td id="LC758" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>endurance-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases stamina for you and your crew by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L759" class="blob-num js-line-number" data-line-number="759"></td>
        <td id="LC759" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockmastermind<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocking the Mastermind<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L760" class="blob-num js-line-number" data-line-number="760"></td>
        <td id="LC760" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockmastermind-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Mastermind is a manipulative leader who excels in situational control.&lt;br/&gt;&lt;br/&gt;Spending the first point in the Mastermind skill tree unlocks the ability to place the doctor bag deployable. The doctor bag can be used to regain health.&lt;br/&gt;&lt;br/&gt;The doctor bag has &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; charges in its basic state.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L761" class="blob-num js-line-number" data-line-number="761"></td>
        <td id="LC761" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Enforcer</span></span></td>
      </tr>
      <tr>
        <td id="L762" class="blob-num js-line-number" data-line-number="762"></td>
        <td id="LC762" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>overkill<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Overkill<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L763" class="blob-num js-line-number" data-line-number="763"></td>
        <td id="LC763" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>overkill-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you kill an enemy using a shotgun or saw, you receive a &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt; damage bonus for &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L764" class="blob-num js-line-number" data-line-number="764"></td>
        <td id="LC764" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>overkill-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The damage bonus now applies to all weapons, but the effect must still be triggered with the shotgun or saw.&lt;br/&gt;&lt;br/&gt;Note: Does not apply to grenade launchers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L765" class="blob-num js-line-number" data-line-number="765"></td>
        <td id="LC765" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ironman<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Iron Man<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L766" class="blob-num js-line-number" data-line-number="766"></td>
        <td id="LC766" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ironman-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocks the ability for you to wear the Improved Combined Tactical Vest.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L767" class="blob-num js-line-number" data-line-number="767"></td>
        <td id="LC767" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ironman-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you melee Shield enemies, they get knocked back by the sheer force.&lt;br/&gt;&lt;br/&gt;Run and shoot – you can now shoot from the hip while sprinting.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L768" class="blob-num js-line-number" data-line-number="768"></td>
        <td id="LC768" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>carbonblade<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Carbon Blade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L769" class="blob-num js-line-number" data-line-number="769"></td>
        <td id="LC769" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>carbonblade-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You replace your saw blades with carbon blades, increasing your saw efficiency by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L770" class="blob-num js-line-number" data-line-number="770"></td>
        <td id="LC770" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>carbonblade-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Attacking enemies with the OVE9000 portable saw wears it down &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; less than before. Saws are &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; more effective.&lt;br/&gt;&lt;br/&gt;You can use the saw as a secondary weapon.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L771" class="blob-num js-line-number" data-line-number="771"></td>
        <td id="LC771" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardboiled<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hard Boiled<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L772" class="blob-num js-line-number" data-line-number="772"></td>
        <td id="LC772" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardboiled-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your shotgun weapon accuracy by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; when firing from the hip.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L773" class="blob-num js-line-number" data-line-number="773"></td>
        <td id="LC773" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardboiled-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your weapon accuracy by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; when firing from the hip with all weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L774" class="blob-num js-line-number" data-line-number="774"></td>
        <td id="LC774" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fullyloaded<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fully Loaded<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L775" class="blob-num js-line-number" data-line-number="775"></td>
        <td id="LC775" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fullyloaded-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You total ammo capacity is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L776" class="blob-num js-line-number" data-line-number="776"></td>
        <td id="LC776" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fullyloaded-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Enemies drop &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt; more ammunition.&lt;br/&gt;&lt;br/&gt;Note: ACE version does not work with custom shotgun ammo types.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L777" class="blob-num js-line-number" data-line-number="777"></td>
        <td id="LC777" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>portablesaw<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Portable Saw<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L778" class="blob-num js-line-number" data-line-number="778"></td>
        <td id="LC778" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>portablesaw-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocks the OVE9000 portable saw for you to use.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L779" class="blob-num js-line-number" data-line-number="779"></td>
        <td id="LC779" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>portablesaw-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your saw blade amount by &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L780" class="blob-num js-line-number" data-line-number="780"></td>
        <td id="LC780" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotguncqb<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shotgun CQB<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L781" class="blob-num js-line-number" data-line-number="781"></td>
        <td id="LC781" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotguncqb-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your shotgun reload speed by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L782" class="blob-num js-line-number" data-line-number="782"></td>
        <td id="LC782" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotguncqb-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your shotgun steel sight speed by &lt;div class=&quot;bluein&quot;&gt;125%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L783" class="blob-num js-line-number" data-line-number="783"></td>
        <td id="LC783" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammospecialist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Ammunition Specialist<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L784" class="blob-num js-line-number" data-line-number="784"></td>
        <td id="LC784" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammospecialist-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now place &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; ammo bags instead of just one.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L785" class="blob-num js-line-number" data-line-number="785"></td>
        <td id="LC785" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ammospecialist-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Each ammo bag contains additional &lt;div class=&quot;bluein&quot;&gt;200%&lt;/div&gt; ammunition.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L786" class="blob-num js-line-number" data-line-number="786"></td>
        <td id="LC786" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>berserker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Berserker<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L787" class="blob-num js-line-number" data-line-number="787"></td>
        <td id="LC787" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>berserker-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The lower your health, the more melee damage you do. When your health is below &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;, you will do up to &lt;div class=&quot;bluein&quot;&gt;250%&lt;/div&gt; more melee and saw damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L788" class="blob-num js-line-number" data-line-number="788"></td>
        <td id="LC788" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>berserker-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When your health is below &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;, you will do up to &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt; more damage with ranged weapons.&lt;br/&gt;&lt;br/&gt;Note: Does not apply to grenade launchers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L789" class="blob-num js-line-number" data-line-number="789"></td>
        <td id="LC789" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotgunimpact<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shotgun Impact<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L790" class="blob-num js-line-number" data-line-number="790"></td>
        <td id="LC790" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotgunimpact-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapon stability with shotguns is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L791" class="blob-num js-line-number" data-line-number="791"></td>
        <td id="LC791" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shotgunimpact-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You deal &lt;div class=&quot;bluein&quot;&gt;35%&lt;/div&gt; more damage with shotguns.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L792" class="blob-num js-line-number" data-line-number="792"></td>
        <td id="LC792" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stunresistance<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Stun Resistance<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L793" class="blob-num js-line-number" data-line-number="793"></td>
        <td id="LC793" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stunresistance-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Reduces the visual effect duration of flashbangs by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L794" class="blob-num js-line-number" data-line-number="794"></td>
        <td id="LC794" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>stunresistance-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Further reduces the visual effect duration by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L795" class="blob-num js-line-number" data-line-number="795"></td>
        <td id="LC795" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>toughguy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tough Guy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L796" class="blob-num js-line-number" data-line-number="796"></td>
        <td id="LC796" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>toughguy-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Reduces your camera shake by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; when you are damaged by enemy fire.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L797" class="blob-num js-line-number" data-line-number="797"></td>
        <td id="LC797" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>toughguy-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your bleedout health is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L798" class="blob-num js-line-number" data-line-number="798"></td>
        <td id="LC798" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>diehard<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Die Hard<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L799" class="blob-num js-line-number" data-line-number="799"></td>
        <td id="LC799" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>diehard-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can use your primary weapon in bleedout.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L800" class="blob-num js-line-number" data-line-number="800"></td>
        <td id="LC800" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>diehard-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your armor recovers &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L801" class="blob-num js-line-number" data-line-number="801"></td>
        <td id="LC801" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>underdog<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Underdog<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L802" class="blob-num js-line-number" data-line-number="802"></td>
        <td id="LC802" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>underdog-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you are surrounded by three enemies or more, you receive a &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; damage bonus for &lt;div class=&quot;bluein&quot;&gt;7&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L803" class="blob-num js-line-number" data-line-number="803"></td>
        <td id="LC803" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>underdog-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you are surrounded by three enemies or more, you receive &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; less damage from enemies for &lt;div class=&quot;bluein&quot;&gt;7&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L804" class="blob-num js-line-number" data-line-number="804"></td>
        <td id="LC804" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pumpingiron<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Pumping Iron<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L805" class="blob-num js-line-number" data-line-number="805"></td>
        <td id="LC805" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pumpingiron-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your melee attacks against non-special enemies deal &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; more damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L806" class="blob-num js-line-number" data-line-number="806"></td>
        <td id="LC806" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>pumpingiron-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your melee attacks against special enemies deal &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; more damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L807" class="blob-num js-line-number" data-line-number="807"></td>
        <td id="LC807" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>oppressor<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Oppressor<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L808" class="blob-num js-line-number" data-line-number="808"></td>
        <td id="LC808" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>oppressor-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapons are &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; more effective at threatening enemies.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L809" class="blob-num js-line-number" data-line-number="809"></td>
        <td id="LC809" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>oppressor-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapons are &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; more effective at threatening enemies.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L810" class="blob-num js-line-number" data-line-number="810"></td>
        <td id="LC810" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletstorm<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bullet Storm<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L811" class="blob-num js-line-number" data-line-number="811"></td>
        <td id="LC811" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletstorm-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Directly after you deploy an ammo bag, you can fire your weapon for &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; seconds without depleting your ammunition.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L812" class="blob-num js-line-number" data-line-number="812"></td>
        <td id="LC812" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletstorm-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can fire &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds longer without depleting your ammunition.&lt;br/&gt;&lt;br/&gt;Note: Does not apply to grenade launchers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L813" class="blob-num js-line-number" data-line-number="813"></td>
        <td id="LC813" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transporter<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Transporter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L814" class="blob-num js-line-number" data-line-number="814"></td>
        <td id="LC814" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transporter-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You move &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; faster when carrying bags.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L815" class="blob-num js-line-number" data-line-number="815"></td>
        <td id="LC815" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>transporter-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can throw bags &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; further.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L816" class="blob-num js-line-number" data-line-number="816"></td>
        <td id="LC816" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockenforcer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocking the Enforcer<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L817" class="blob-num js-line-number" data-line-number="817"></td>
        <td id="LC817" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockenforcer-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Enforcer is a violent criminal, usually employed by crime syndicates to execute jobs that no one else can.&lt;br/&gt;&lt;br/&gt;Spending the first point in the Enforcer skill tree unlocks the ability to place the ammo bag deployable. The ammo bag can be used to gain ammunition.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L818" class="blob-num js-line-number" data-line-number="818"></td>
        <td id="LC818" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Technician</span></span></td>
      </tr>
      <tr>
        <td id="L819" class="blob-num js-line-number" data-line-number="819"></td>
        <td id="LC819" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytowerdefence<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sentry Tower Defense<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L820" class="blob-num js-line-number" data-line-number="820"></td>
        <td id="LC820" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytowerdefence-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now place &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; sentry guns instead of just one.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L821" class="blob-num js-line-number" data-line-number="821"></td>
        <td id="LC821" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytowerdefence-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sentry gun damage is increased by &lt;div class=&quot;bluein&quot;&gt;300%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L822" class="blob-num js-line-number" data-line-number="822"></td>
        <td id="LC822" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>magplus<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Mag Plus<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L823" class="blob-num js-line-number" data-line-number="823"></td>
        <td id="LC823" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>magplus-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapon magazine capacity is increased by &lt;div class=&quot;bluein&quot;&gt;5&lt;/div&gt; rounds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L824" class="blob-num js-line-number" data-line-number="824"></td>
        <td id="LC824" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>magplus-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Further increases your weapon magazine capacity by &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; rounds.&lt;br/&gt;&lt;br/&gt;Note: Does not apply to sniper rifles.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L825" class="blob-num js-line-number" data-line-number="825"></td>
        <td id="LC825" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletproof<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bulletproof<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L826" class="blob-num js-line-number" data-line-number="826"></td>
        <td id="LC826" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletproof-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Improves your armor so you can absorb &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; more damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L827" class="blob-num js-line-number" data-line-number="827"></td>
        <td id="LC827" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bulletproof-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The armor recovery rate of you and your crew is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L828" class="blob-num js-line-number" data-line-number="828"></td>
        <td id="LC828" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrycombatupgrade<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sentry Combat Upgrade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L829" class="blob-num js-line-number" data-line-number="829"></td>
        <td id="LC829" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrycombatupgrade-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now reload your sentry gun with your own ammo.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L830" class="blob-num js-line-number" data-line-number="830"></td>
        <td id="LC830" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrycombatupgrade-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sentry gun receives a protective shield.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L831" class="blob-num js-line-number" data-line-number="831"></td>
        <td id="LC831" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shapedcharge<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shaped Charge<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L832" class="blob-num js-line-number" data-line-number="832"></td>
        <td id="LC832" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shapedcharge-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Adds &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; more trip mines to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L833" class="blob-num js-line-number" data-line-number="833"></td>
        <td id="LC833" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shapedcharge-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Trip mines can now be converted to shaped charges, used to breach certain safes and doors.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L834" class="blob-num js-line-number" data-line-number="834"></td>
        <td id="LC834" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shockproof<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shockproof<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L835" class="blob-num js-line-number" data-line-number="835"></td>
        <td id="LC835" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shockproof-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Taser shock attacks on you backfire, knocking back the Taser.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L836" class="blob-num js-line-number" data-line-number="836"></td>
        <td id="LC836" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shockproof-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Interacting with an enemy Taser while he is electrocuting you will electrocute him, dealing &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; damage to his health.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L837" class="blob-num js-line-number" data-line-number="837"></td>
        <td id="LC837" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytargetingpackage<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sentry Targeting Package<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L838" class="blob-num js-line-number" data-line-number="838"></td>
        <td id="LC838" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytargetingpackage-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sentry gun accuracy is improved by &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L839" class="blob-num js-line-number" data-line-number="839"></td>
        <td id="LC839" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrytargetingpackage-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sentry gun rotational speed is increased by &lt;div class=&quot;bluein&quot;&gt;150%&lt;/div&gt;. Your sentry gun is loaded with &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; extra ammo.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L840" class="blob-num js-line-number" data-line-number="840"></td>
        <td id="LC840" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blastradius<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Jack of all Trades<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L841" class="blob-num js-line-number" data-line-number="841"></td>
        <td id="LC841" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blastradius-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The radius of trip mine explosions is increased by &lt;div class=&quot;bluein&quot;&gt;70%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L842" class="blob-num js-line-number" data-line-number="842"></td>
        <td id="LC842" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>blastradius-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now carry sentry guns and trip mines at the same time. When you deplete your trip mines or sentry guns you will switch to the other one.&lt;br/&gt;&lt;br/&gt;Note: You need a sentry gun for this skill to work.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L843" class="blob-num js-line-number" data-line-number="843"></td>
        <td id="LC843" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentdrilling<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Silent Drilling<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L844" class="blob-num js-line-number" data-line-number="844"></td>
        <td id="LC844" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentdrilling-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your drill makes &lt;div class=&quot;bluein&quot;&gt;65%&lt;/div&gt; less noise. Civilians and guards are less likely to hear your drill and sound the alarm.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L845" class="blob-num js-line-number" data-line-number="845"></td>
        <td id="LC845" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentdrilling-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your drill is silent. Civilians and guards have to see the drill in order to sound the alarm.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L846" class="blob-num js-line-number" data-line-number="846"></td>
        <td id="LC846" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrygun<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sentry Gun<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L847" class="blob-num js-line-number" data-line-number="847"></td>
        <td id="LC847" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrygun-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocks the sentry gun for you to use.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L848" class="blob-num js-line-number" data-line-number="848"></td>
        <td id="LC848" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sentrygun-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sentry gun gains &lt;div class=&quot;bluein&quot;&gt;150%&lt;/div&gt; more health.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L849" class="blob-num js-line-number" data-line-number="849"></td>
        <td id="LC849" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>improvedcrafting<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Tactical Mines<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L850" class="blob-num js-line-number" data-line-number="850"></td>
        <td id="LC850" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>improvedcrafting-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The radius of trip mine explosions is increased by &lt;div class=&quot;bluein&quot;&gt;30%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L851" class="blob-num js-line-number" data-line-number="851"></td>
        <td id="LC851" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>improvedcrafting-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Special enemies marked by your trip mines take &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; more damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L852" class="blob-num js-line-number" data-line-number="852"></td>
        <td id="LC852" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>drillsergant<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Drill Sergeant<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L853" class="blob-num js-line-number" data-line-number="853"></td>
        <td id="LC853" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>drillsergant-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your drill speed by &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L854" class="blob-num js-line-number" data-line-number="854"></td>
        <td id="LC854" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>drillsergant-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Further increases your drill speed by &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L855" class="blob-num js-line-number" data-line-number="855"></td>
        <td id="LC855" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sharpshooter<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sharpshooter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L856" class="blob-num js-line-number" data-line-number="856"></td>
        <td id="LC856" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sharpshooter-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You are &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; more accurate with all single shot weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L857" class="blob-num js-line-number" data-line-number="857"></td>
        <td id="LC857" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sharpshooter-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapon stability is increased with all rifles by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L858" class="blob-num js-line-number" data-line-number="858"></td>
        <td id="LC858" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatengineer<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Combat Engineer<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L859" class="blob-num js-line-number" data-line-number="859"></td>
        <td id="LC859" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatengineer-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Allows you to turn trip mines on or off.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L860" class="blob-num js-line-number" data-line-number="860"></td>
        <td id="LC860" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>combatengineer-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Upgrades your trip mines with a sensor mode. Enemies that go past your trip mines while in sensor mode are highlighted for you and your crew.&lt;br/&gt;&lt;br/&gt;If stealth is not an option, the trip mines will highlight special enemies for you and your crew.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L861" class="blob-num js-line-number" data-line-number="861"></td>
        <td id="LC861" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardwareexpert<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hardware Expert<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L862" class="blob-num js-line-number" data-line-number="862"></td>
        <td id="LC862" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardwareexpert-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You fix the drill &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; faster and you also deploy trip mines &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L863" class="blob-num js-line-number" data-line-number="863"></td>
        <td id="LC863" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hardwareexpert-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Gives drill a &lt;div class=&quot;bluein&quot;&gt;30%&lt;/div&gt; chance to autorestart when it breaks down. You also deploy the sentry gun &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L864" class="blob-num js-line-number" data-line-number="864"></td>
        <td id="LC864" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rifleman<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Rifleman<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L865" class="blob-num js-line-number" data-line-number="865"></td>
        <td id="LC865" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rifleman-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your snap to zoom &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt; faster with assault rifles and sniper rifles.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L866" class="blob-num js-line-number" data-line-number="866"></td>
        <td id="LC866" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>rifleman-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your weapon zoom level is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; with assault rifles and sniper rifles.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L867" class="blob-num js-line-number" data-line-number="867"></td>
        <td id="LC867" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demolitionman<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Demolition Man<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L868" class="blob-num js-line-number" data-line-number="868"></td>
        <td id="LC868" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demolitionman-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Adds &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; more trip mine to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L869" class="blob-num js-line-number" data-line-number="869"></td>
        <td id="LC869" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>demolitionman-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Decreases your trip mine deploy time by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L870" class="blob-num js-line-number" data-line-number="870"></td>
        <td id="LC870" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nervesofsteel<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nerves of Steel<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L871" class="blob-num js-line-number" data-line-number="871"></td>
        <td id="LC871" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nervesofsteel-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You take &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; less damage while interacting with things.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L872" class="blob-num js-line-number" data-line-number="872"></td>
        <td id="LC872" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>nervesofsteel-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now use steel sight while in bleed-out.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L873" class="blob-num js-line-number" data-line-number="873"></td>
        <td id="LC873" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlocktechnician<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocking the Technician<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L874" class="blob-num js-line-number" data-line-number="874"></td>
        <td id="LC874" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlocktechnician-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Technician is an expert in the practical application of criminal science, enjoying anything that goes BOOM!&lt;br/&gt;&lt;br/&gt;Spending the first point in the Technician skill tree unlocks the ability to place the trip mine deployable. The trip mine can be used to blow things up, like people and safes.&lt;br/&gt;&lt;br/&gt;&lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; deployable trip mines are added to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L875" class="blob-num js-line-number" data-line-number="875"></td>
        <td id="LC875" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Ghost</span></span></td>
      </tr>
      <tr>
        <td id="L876" class="blob-num js-line-number" data-line-number="876"></td>
        <td id="LC876" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cameraloop<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Camera Loop<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L877" class="blob-num js-line-number" data-line-number="877"></td>
        <td id="LC877" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cameraloop-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Interacting with a camera at close range will cause the camera to temporarily see a pre-recording for the next &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds so you can sneak past it. Your crew can only loop &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; camera at a time.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L878" class="blob-num js-line-number" data-line-number="878"></td>
        <td id="LC878" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cameraloop-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Camera loop duration is increased by &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L879" class="blob-num js-line-number" data-line-number="879"></td>
        <td id="LC879" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmfeedback<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ECM Feedback<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L880" class="blob-num js-line-number" data-line-number="880"></td>
        <td id="LC880" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmfeedback-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now interact with ECM jammers to cause a feedback loop. When interacted, the ECM jammer has a &lt;div class=&quot;bluein&quot;&gt;50%-100%&lt;/div&gt; chance to incapacitate enemies within &lt;div class=&quot;bluein&quot;&gt;25&lt;/div&gt; meters radius every &lt;div class=&quot;bluein&quot;&gt;1.5&lt;/div&gt; seconds.&lt;br/&gt;&lt;br/&gt;ECM feedback lasts &lt;div class=&quot;bluein&quot;&gt;15-20&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L881" class="blob-num js-line-number" data-line-number="881"></td>
        <td id="LC881" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmfeedback-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You will now instantly interact with a ECM jammer and the ECM feedback duration is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.&lt;br/&gt;&lt;br/&gt;Your ECM jammer has a &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt; chance every &lt;div class=&quot;bluein&quot;&gt;4&lt;/div&gt; minutes to recharge itself.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L882" class="blob-num js-line-number" data-line-number="882"></td>
        <td id="LC882" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>movingtarget<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Moving Target<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L883" class="blob-num js-line-number" data-line-number="883"></td>
        <td id="LC883" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>movingtarget-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now sprint while strafing.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L884" class="blob-num js-line-number" data-line-number="884"></td>
        <td id="LC884" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>movingtarget-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now sprint in any direction.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L885" class="blob-num js-line-number" data-line-number="885"></td>
        <td id="LC885" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lockpicking<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Lockpicking Expert<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L886" class="blob-num js-line-number" data-line-number="886"></td>
        <td id="LC886" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lockpicking-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your lock-picking interaction speed by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L887" class="blob-num js-line-number" data-line-number="887"></td>
        <td id="LC887" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lockpicking-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now silently crack safes by hand.&lt;br/&gt;&lt;br/&gt;Further increases your lockpicking interaction speed by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L888" class="blob-num js-line-number" data-line-number="888"></td>
        <td id="LC888" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmoverdrive<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ECM Overdrive<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L889" class="blob-num js-line-number" data-line-number="889"></td>
        <td id="LC889" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmoverdrive-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your ECM jammer duration is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L890" class="blob-num js-line-number" data-line-number="890"></td>
        <td id="LC890" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmoverdrive-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your ECM jammer can now also be used to open certain doors.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L891" class="blob-num js-line-number" data-line-number="891"></td>
        <td id="LC891" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>professional<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Professional<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L892" class="blob-num js-line-number" data-line-number="892"></td>
        <td id="LC892" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>professional-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Weapon stability with silenced weapons is increased by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;. Your snap to zoom is &lt;div class=&quot;bluein&quot;&gt;100%&lt;/div&gt; faster with silenced weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L893" class="blob-num js-line-number" data-line-number="893"></td>
        <td id="LC893" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>professional-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your accuracy with silenced weapons is increased by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;. You gain a &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; chance to pierce enemy armor with silenced weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L894" class="blob-num js-line-number" data-line-number="894"></td>
        <td id="LC894" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ninelives<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Nine Lives<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L895" class="blob-num js-line-number" data-line-number="895"></td>
        <td id="LC895" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ninelives-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain the ability to go into bleed-out &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; more time before going into custody.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L896" class="blob-num js-line-number" data-line-number="896"></td>
        <td id="LC896" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ninelives-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you get into bleed-out, you have a &lt;div class=&quot;bluein&quot;&gt;35%&lt;/div&gt; chance to get right back up.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L897" class="blob-num js-line-number" data-line-number="897"></td>
        <td id="LC897" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmspecialist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>ECM Specialist<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L898" class="blob-num js-line-number" data-line-number="898"></td>
        <td id="LC898" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmspecialist-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now place &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; ECM jammers instead of just one.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L899" class="blob-num js-line-number" data-line-number="899"></td>
        <td id="LC899" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>ecmspecialist-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The ECM jammer duration is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; and the ECM feedback duration lasts &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; longer. The ECM jammer now delays the pager response time as long as the jammer is active.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L900" class="blob-num js-line-number" data-line-number="900"></td>
        <td id="LC900" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentkiller<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Silent Killer<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L901" class="blob-num js-line-number" data-line-number="901"></td>
        <td id="LC901" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentkiller-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You deal &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; more damage with all silenced weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L902" class="blob-num js-line-number" data-line-number="902"></td>
        <td id="LC902" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>silentkiller-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You deal &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; more damage and have a &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; chance to pierce enemy armor with silenced weapons.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L903" class="blob-num js-line-number" data-line-number="903"></td>
        <td id="LC903" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shinobi<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Shinobi<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L904" class="blob-num js-line-number" data-line-number="904"></td>
        <td id="LC904" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shinobi-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your walk speed is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; and your crouch speed is increased by &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L905" class="blob-num js-line-number" data-line-number="905"></td>
        <td id="LC905" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>shinobi-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Enemies make &lt;div class=&quot;bluein&quot;&gt;95%&lt;/div&gt; less noise when shot or melee<span class="pl-cce">\&#39;</span>d to death.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L906" class="blob-num js-line-number" data-line-number="906"></td>
        <td id="LC906" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>martialarts<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Martial Arts<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L907" class="blob-num js-line-number" data-line-number="907"></td>
        <td id="LC907" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>martialarts-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You are &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; more likely to knock down an enemy with a melee strike.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L908" class="blob-num js-line-number" data-line-number="908"></td>
        <td id="LC908" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>martialarts-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You take &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; less damage from all melee attacks because of training.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L909" class="blob-num js-line-number" data-line-number="909"></td>
        <td id="LC909" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smgspecialist<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>SMG Specialist<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L910" class="blob-num js-line-number" data-line-number="910"></td>
        <td id="LC910" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smgspecialist-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your reload speed of SMG weapons by &lt;div class=&quot;bluein&quot;&gt;35%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L911" class="blob-num js-line-number" data-line-number="911"></td>
        <td id="LC911" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>smgspecialist-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your rate of fire with SMGs by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L912" class="blob-num js-line-number" data-line-number="912"></td>
        <td id="LC912" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fasthands<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Fast Hands<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L913" class="blob-num js-line-number" data-line-number="913"></td>
        <td id="LC913" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fasthands-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can pack and interact with loot bags &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; faster.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L914" class="blob-num js-line-number" data-line-number="914"></td>
        <td id="LC914" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>fasthands-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Further increases your pack and interaction speed with loot bags by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L915" class="blob-num js-line-number" data-line-number="915"></td>
        <td id="LC915" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chameleon<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Chameleon<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L916" class="blob-num js-line-number" data-line-number="916"></td>
        <td id="LC916" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chameleon-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>In casing mode, you can now mark guards, cameras and your concealment is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L917" class="blob-num js-line-number" data-line-number="917"></td>
        <td id="LC917" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>chameleon-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You are &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; less likely to be targeted when you are close to your crew members.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L918" class="blob-num js-line-number" data-line-number="918"></td>
        <td id="LC918" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cleaner<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cleaner<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L919" class="blob-num js-line-number" data-line-number="919"></td>
        <td id="LC919" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cleaner-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You deal &lt;div class=&quot;bluein&quot;&gt;5%&lt;/div&gt; more damage against special enemies.&lt;br/&gt;&lt;br/&gt;You can now buy a body bag asset which contains &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; body bags that can be shared with your crew.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L920" class="blob-num js-line-number" data-line-number="920"></td>
        <td id="LC920" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cleaner-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>&lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; additional body bag is added to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L921" class="blob-num js-line-number" data-line-number="921"></td>
        <td id="LC921" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>deadpresidents<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Dead Presidents<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L922" class="blob-num js-line-number" data-line-number="922"></td>
        <td id="LC922" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>deadpresidents-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Adds &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; value to loose cash that you pick up.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L923" class="blob-num js-line-number" data-line-number="923"></td>
        <td id="LC923" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>deadpresidents-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Further adds &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; value to loose cash that you pick up.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L924" class="blob-num js-line-number" data-line-number="924"></td>
        <td id="LC924" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sprinter<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sprinter<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L925" class="blob-num js-line-number" data-line-number="925"></td>
        <td id="LC925" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sprinter-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The time before stamina regeneration starts is reduced by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; and the regeneration of stamina is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L926" class="blob-num js-line-number" data-line-number="926"></td>
        <td id="LC926" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sprinter-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your sprint speed is increased by &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; and you have a &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; better chance dodging enemy fire while sprinting.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L927" class="blob-num js-line-number" data-line-number="927"></td>
        <td id="LC927" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>catburglar<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Cat Burglar<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L928" class="blob-num js-line-number" data-line-number="928"></td>
        <td id="LC928" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>catburglar-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You take &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt; less damage from falling.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L929" class="blob-num js-line-number" data-line-number="929"></td>
        <td id="LC929" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>catburglar-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your fall damage is reduced so that you only take armor damage from falling from non-fatal heights. Your custody time is reduced by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L930" class="blob-num js-line-number" data-line-number="930"></td>
        <td id="LC930" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockghost<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocking the Ghost<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L931" class="blob-num js-line-number" data-line-number="931"></td>
        <td id="LC931" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockghost-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Ghost is a stealth artist, capable of grand theft without force or violence.&lt;br/&gt;&lt;br/&gt;Spending the first point in the Ghost skill tree unlocks the ability to use the electronic countermeasure equipment, also known as the ECM jammer. When used, the ECM jammer can open ATM machines and temporarily cancel out electronic devices such as cell phones and cameras.&lt;br/&gt;&lt;br/&gt;&lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; ECM jammer is added to your inventory. An ECM jammer lasts &lt;div class=&quot;bluein&quot;&gt;20&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L932" class="blob-num js-line-number" data-line-number="932"></td>
        <td id="LC932" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">//Fugitive</span></span></td>
      </tr>
      <tr>
        <td id="L933" class="blob-num js-line-number" data-line-number="933"></td>
        <td id="LC933" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullseye<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Bullseye<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L934" class="blob-num js-line-number" data-line-number="934"></td>
        <td id="LC934" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullseye-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You regenerate &lt;div class=&quot;bluein&quot;&gt;16&lt;/div&gt; armor for each successful headshot. This can not occur more than once every &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L935" class="blob-num js-line-number" data-line-number="935"></td>
        <td id="LC935" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>bullseye-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You regenerate an additional &lt;div class=&quot;bluein&quot;&gt;16&lt;/div&gt; armor for each successful headshot.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L936" class="blob-num js-line-number" data-line-number="936"></td>
        <td id="LC936" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sneakybastard<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sneaky Bastard<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L937" class="blob-num js-line-number" data-line-number="937"></td>
        <td id="LC937" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sneakybastard-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain a &lt;div class=&quot;bluein&quot;&gt;1%&lt;/div&gt; dodge chance for every &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; points of concealment under &lt;div class=&quot;bluein&quot;&gt;35&lt;/div&gt; up to &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L938" class="blob-num js-line-number" data-line-number="938"></td>
        <td id="LC938" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sneakybastard-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain a &lt;div class=&quot;bluein&quot;&gt;1%&lt;/div&gt; dodge chance for every &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; point of concealment under &lt;div class=&quot;bluein&quot;&gt;35&lt;/div&gt; up to &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L939" class="blob-num js-line-number" data-line-number="939"></td>
        <td id="LC939" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akimbo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Akimbo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L940" class="blob-num js-line-number" data-line-number="940"></td>
        <td id="LC940" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akimbo-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can dual wield two weapons. These can be found under the Akimbo tab in the inventory menu.&lt;br/&gt;&lt;br/&gt;Dual wielded weapons have &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt; stability penalty. <span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L941" class="blob-num js-line-number" data-line-number="941"></td>
        <td id="LC941" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>akimbo-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your stability penalty with Akimbo weapons is set to &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt; and increases the ammo capacity of your Akimbo weapons to &lt;div class=&quot;bluein&quot;&gt;150%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L942" class="blob-num js-line-number" data-line-number="942"></td>
        <td id="LC942" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>triggerhappy<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Trigger Happy<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L943" class="blob-num js-line-number" data-line-number="943"></td>
        <td id="LC943" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>triggerhappy-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Each successful pistol hit grants a &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; damage boost for &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; seconds and can stack &lt;div class=&quot;bluein&quot;&gt;4&lt;/div&gt; times.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L944" class="blob-num js-line-number" data-line-number="944"></td>
        <td id="LC944" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>triggerhappy-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases the damage boost duration to &lt;div class=&quot;bluein&quot;&gt;8&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L945" class="blob-num js-line-number" data-line-number="945"></td>
        <td id="LC945" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lowblow<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Low Blow<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L946" class="blob-num js-line-number" data-line-number="946"></td>
        <td id="LC946" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lowblow-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain a &lt;div class=&quot;bluein&quot;&gt;3%&lt;/div&gt; critical hit chance for every &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; points of concealment under &lt;div class=&quot;bluein&quot;&gt;35&lt;/div&gt; up to &lt;div class=&quot;bluein&quot;&gt;30%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L947" class="blob-num js-line-number" data-line-number="947"></td>
        <td id="LC947" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>lowblow-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain a &lt;div class=&quot;bluein&quot;&gt;3%&lt;/div&gt; critical hit chance for every &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; point of concealment under &lt;div class=&quot;bluein&quot;&gt;35&lt;/div&gt; up to &lt;div class=&quot;bluein&quot;&gt;30%&lt;/div&gt;.&lt;br/&gt;&lt;br/&gt;Note: Does not apply to grenade launchers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L948" class="blob-num js-line-number" data-line-number="948"></td>
        <td id="LC948" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>counterstrike<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Counter-Strike<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L949" class="blob-num js-line-number" data-line-number="949"></td>
        <td id="LC949" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>counterstrike-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When charging your melee weapon you will counterattack enemies that try to strike you, knocking them down. The knock-down does not deal any damage.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L950" class="blob-num js-line-number" data-line-number="950"></td>
        <td id="LC950" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>counterstrike-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now counterattack Cloakers.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L951" class="blob-num js-line-number" data-line-number="951"></td>
        <td id="LC951" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>swansong<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Swan Song<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L952" class="blob-num js-line-number" data-line-number="952"></td>
        <td id="LC952" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>swansong-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When your health reaches &lt;div class=&quot;bluein&quot;&gt;0&lt;/div&gt;, instead of instantly going down, you can fight for &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; seconds with a &lt;div class=&quot;bluein&quot;&gt;60%&lt;/div&gt; movement speed penalty.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L953" class="blob-num js-line-number" data-line-number="953"></td>
        <td id="LC953" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>swansong-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You no longer need to reload and can fight for an additional &lt;div class=&quot;bluein&quot;&gt;6&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L954" class="blob-num js-line-number" data-line-number="954"></td>
        <td id="LC954" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>undertaker<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Undertaker<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L955" class="blob-num js-line-number" data-line-number="955"></td>
        <td id="LC955" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>undertaker-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You unlock the ability to place the body bag case deployable.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L956" class="blob-num js-line-number" data-line-number="956"></td>
        <td id="LC956" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>undertaker-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now place &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt; body bag cases instead of just one.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L957" class="blob-num js-line-number" data-line-number="957"></td>
        <td id="LC957" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>uppers<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Uppers<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L958" class="blob-num js-line-number" data-line-number="958"></td>
        <td id="LC958" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>uppers-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Adds &lt;div class=&quot;bluein&quot;&gt;3&lt;/div&gt; more first aid kits to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L959" class="blob-num js-line-number" data-line-number="959"></td>
        <td id="LC959" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>uppers-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Adds &lt;div class=&quot;bluein&quot;&gt;7&lt;/div&gt; more first aid kits to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L960" class="blob-num js-line-number" data-line-number="960"></td>
        <td id="LC960" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brotherskeeper<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Brother<span class="pl-cce">\&#39;</span>s Keeper<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L961" class="blob-num js-line-number" data-line-number="961"></td>
        <td id="LC961" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brotherskeeper-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The damage thugs deal to you is reduced by &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L962" class="blob-num js-line-number" data-line-number="962"></td>
        <td id="LC962" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>brotherskeeper-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The damage thugs deal to you is reduced by an additional &lt;div class=&quot;bluein&quot;&gt;25%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L963" class="blob-num js-line-number" data-line-number="963"></td>
        <td id="LC963" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>winstonwolfe<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Winston Wolfe<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L964" class="blob-num js-line-number" data-line-number="964"></td>
        <td id="LC964" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>winstonwolfe-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can now carry &lt;div class=&quot;bluein&quot;&gt;1&lt;/div&gt; additional body bag.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L965" class="blob-num js-line-number" data-line-number="965"></td>
        <td id="LC965" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>winstonwolfe-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>During stealth, you know how to kill without leaving a trace, reducing your cleaning cost by &lt;div class=&quot;bluein&quot;&gt;75%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L966" class="blob-num js-line-number" data-line-number="966"></td>
        <td id="LC966" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>quickfix<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Quick Fix<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L967" class="blob-num js-line-number" data-line-number="967"></td>
        <td id="LC967" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>quickfix-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Decreases your first aid kit deploy time by &lt;div class=&quot;bluein&quot;&gt;50%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L968" class="blob-num js-line-number" data-line-number="968"></td>
        <td id="LC968" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>quickfix-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Crew members that use your first aid kits take &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt; less damage for &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; seconds.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L969" class="blob-num js-line-number" data-line-number="969"></td>
        <td id="LC969" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>runandgun<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Run and Gun<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L970" class="blob-num js-line-number" data-line-number="970"></td>
        <td id="LC970" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>runandgun-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; additional move speed.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L971" class="blob-num js-line-number" data-line-number="971"></td>
        <td id="LC971" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>runandgun-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your movement speed is unhindered while using steel sight.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L972" class="blob-num js-line-number" data-line-number="972"></td>
        <td id="LC972" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sixthsense<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Sixth Sense<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L973" class="blob-num js-line-number" data-line-number="973"></td>
        <td id="LC973" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sixthsense-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>When you stand still for &lt;div class=&quot;bluein&quot;&gt;3.5&lt;/div&gt; seconds in stealth, you start highlighting people around you within a &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt; meter radius.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L974" class="blob-num js-line-number" data-line-number="974"></td>
        <td id="LC974" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>sixthsense-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You can pick-up items while in casing mode. <span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L975" class="blob-num js-line-number" data-line-number="975"></td>
        <td id="LC975" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>duckandcover<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Duck and Cover<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L976" class="blob-num js-line-number" data-line-number="976"></td>
        <td id="LC976" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>duckandcover-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You have a &lt;div class=&quot;bluein&quot;&gt;5%&lt;/div&gt; better chance dodging enemy fire while crouching.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L977" class="blob-num js-line-number" data-line-number="977"></td>
        <td id="LC977" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>duckandcover-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You have an additional &lt;div class=&quot;bluein&quot;&gt;10%&lt;/div&gt; chance dodging enemy fire while crouching.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L978" class="blob-num js-line-number" data-line-number="978"></td>
        <td id="LC978" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>daredevil<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Daredevil<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L979" class="blob-num js-line-number" data-line-number="979"></td>
        <td id="LC979" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>daredevil-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increase your climbing speed by &lt;div class=&quot;bluein&quot;&gt;20%&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L980" class="blob-num js-line-number" data-line-number="980"></td>
        <td id="LC980" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>daredevil-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>You gain a &lt;div class=&quot;bluein&quot;&gt;15%&lt;/div&gt; dodge chance while zip-lining.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L981" class="blob-num js-line-number" data-line-number="981"></td>
        <td id="LC981" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hiddenblade<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Hidden Blade<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L982" class="blob-num js-line-number" data-line-number="982"></td>
        <td id="LC982" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hiddenblade-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases your melee weapon concealment by &lt;div class=&quot;bluein&quot;&gt;2&lt;/div&gt;. <span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L983" class="blob-num js-line-number" data-line-number="983"></td>
        <td id="LC983" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>hiddenblade-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Enemies make &lt;div class=&quot;bluein&quot;&gt;95%&lt;/div&gt; less noise when shot or meleed to death.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L984" class="blob-num js-line-number" data-line-number="984"></td>
        <td id="LC984" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>thickskin<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Thick Skin<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L985" class="blob-num js-line-number" data-line-number="985"></td>
        <td id="LC985" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>thickskin-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Your steadiness is increased by &lt;div class=&quot;bluein&quot;&gt;10&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L986" class="blob-num js-line-number" data-line-number="986"></td>
        <td id="LC986" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>thickskin-ace<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Increases the armor of all ballistic vests by &lt;div class=&quot;bluein&quot;&gt;20&lt;/div&gt;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L987" class="blob-num js-line-number" data-line-number="987"></td>
        <td id="LC987" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockfugitive<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>Unlocking the Fugitive<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L988" class="blob-num js-line-number" data-line-number="988"></td>
        <td id="LC988" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-vo">$l</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>unlockfugitive-normal<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>The Fugitive is a survivor, always on the run and an expert at hiding from the law.&lt;br/&gt;&lt;br/&gt;Spending the first point in the Fugitive skill tree unlocks the ability to place the first aid kit deployable. The first aid kit is quick to deploy, quick to use and restores health on pick-up.&lt;br/&gt;&lt;br/&gt;&lt;div class=&quot;bluein&quot;&gt;4&lt;/div&gt; first aid kits are added to your inventory.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
</table>

  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="https://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.04099s from github-fe139-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents js-suggester-field" placeholder=""></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-1dca3eab4ab3b2a00235feebb2fc218f0e91bbe06e140fb6ca67049215c66508.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-1f331009569afef1b6732009f2b35f38330c0837b8cf35ff15698f631aa4256d.js" type="text/javascript"></script>
      
      
  </body>
</html>

