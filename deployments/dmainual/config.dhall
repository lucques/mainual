let common = ../config_common.dhall

let t = common.t
let T = common.t.types
let P = common.t.prelude


------------
-- Config --
------------

let deplName         = "dmainual"
let deplDir          = common.deploymentsDir ++ "/" ++ deplName
let host             = "mainual.de"
let rcloneConfigPath = ./RCLONE_CONFIG_PATH as Text

let rcloneRemote = {
    , name = "dmainual"
    , dir  = "/mainual"
    , configPath = rcloneConfigPath
}

in

t.makeDefaultDockerSyncDepl
    deplName
    common.conjinDir
    common.appDir
    deplDir
    common.auth
    (None T.ServerDb)
    common.mainTemplate
    common.modules
    host
    rcloneRemote
: T.DockerSyncDepl