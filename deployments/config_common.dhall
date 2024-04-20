let t = https://raw.githubusercontent.com/lucques/conjin/399ca9c2da4395e8f42d36ec8d382093fbad85da/build-tools/tools-external.dhall -- 2024-04

let conjinDir      = ./CONJIN_DIR      as Text
let appDir         = ./APP_DIR         as Text
let deploymentsDir = ./DEPLOYMENTS_DIR as Text


-------------------
-- Common config --
-------------------

let bootstrap    = t.makeModule "bootstrap"     True True
let bookTemplate = t.makeModule "template-book" True False

let localBookTemplate = {
  , location = { dirName = "template-book-local", isShared = False, isExternal = False }
  , compileScss = True
  , scssModuleDeps = [ bookTemplate.location, bootstrap.location ]
  , defaultConfig = t.prelude.JSON.object [
    , { mapKey = "shortcut_icons_enabled"         , mapValue = t.prelude.JSON.bool True }
    , { mapKey = "use_img_as_logo"                , mapValue = t.prelude.JSON.bool True }
    , { mapKey = "link_logo_to_home"              , mapValue = t.prelude.JSON.bool True }
    , { mapKey = "nav_show_top_level"             , mapValue = t.prelude.JSON.bool False }
    , { mapKey = "nav_active_sidebar_by_default"  , mapValue = t.prelude.JSON.bool True }
    , { mapKey = "nav_reduce_by_default"          , mapValue = t.prelude.JSON.bool False }
    , { mapKey = "nav_reduce_toggleable_with_ctrl", mapValue = t.prelude.JSON.bool False }
  ]
}

let modules =
      (t.makeModules True False  -- Shared & internal
        [ "accordion"
        , "db"
        , "doc_extensions"
        , "exercise"
        , "html"
        , "mathjax-extensions"
        , "nav"
        , "print_mode"
        , "references"
        , "solution_mode"
        , "source"
        ])
      #
      (t.makeModules True True  -- Shared & external
        [ "jquery"
        , "malihu-custom-scrollbar-plugin"
        , "mathjax"
        , "paper-css"
        , "plotly"
        , "prism"
        ])
      #
      (t.makeModules False False -- Local & internal
        [
        , "role-info"
        ])
      #
      (t.makeModules False True -- Local & external
        (t.prelude.List.empty Text))
      #
      [ bootstrap, bookTemplate, localBookTemplate ]

let auth = {
    , rootUser  = "root"
    , guestUser = "guest"
    , loginWithoutUserName = True
    , loginTemplate        = localBookTemplate

    , users2passwordHashes = [
        , t.assignUser2PasswordHash "root"       "$2y$10$YNhs3hPKU68GKMYB0EVWJummeACZk4aHP8uMOOuLFHKpBvJYgjGoC"
        , t.assignUser2PasswordHash "admin"      "$2y$10$S6L8H/DCx00qDpURXrRbUuXf1XKS8X3O9A68GpHsLpKZlGbitQ8tC"
        , t.assignUser2PasswordHash "preprocess" "$2y$10$H7z8EIrEhNnCulzLjISDluoqzy9VBvsUty6CEY7FKuhT2V01NvoEG"
    ]
    , users2groups = t.prelude.List.empty t.types.User2Group
    , groups2privileges = [
        , t.grantPreprocPrivToUser "preprocess"
        , t.grantDebugPrivToUser   "admin"
    ]
    , groups2targetRules = [
        , t.allowViewActionForUser (t.prelude.List.empty Text) "guest"
    ]
}

in

{
  , t

  , conjinDir
  , appDir
  , deploymentsDir

  , mainTemplate = localBookTemplate
  , modules
  , auth
}