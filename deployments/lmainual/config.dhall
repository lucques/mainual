let common = ../config_common.dhall

let t = common.t
let T = common.t.types
let P = common.t.prelude


------------
-- Config --
------------

let deplName = "lmainual"
let deplDir  = common.deploymentsDir ++ "/" ++ deplName

in t.makeDefaultDockerNginxDepl
    deplName
    common.conjinDir
    common.appDir
    deplDir
    common.auth
    (None T.DockerDb)
    common.mainTemplate
    common.modules
: T.DockerNginxDepl