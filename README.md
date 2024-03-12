
```
ZK-APIREST
├─ 📁app
│  └─ 📁src
│     ├─ 📁controllers
│     │  ├─ 📄AsistenciasC.php
│     │  └─ 📄UsuariosC.php
│     └─ 📁routes
│        ├─ 📄AsistenciasR.php
│        └─ 📄UsuariosR.php
├─ 📁public
│  ├─ 📄.htaccess
│  └─ 📄index.php
├─ 📁templates
│  └─ 📄example.html
├─ 📁tests
├─ 📁vendor
│  ├─ 📁composer
│  │  ├─ 📄autoload_classmap.php
│  │  ├─ 📄autoload_files.php
│  │  ├─ 📄autoload_namespaces.php
│  │  ├─ 📄autoload_psr4.php
│  │  ├─ 📄autoload_real.php
│  │  ├─ 📄autoload_static.php
│  │  ├─ 📄ClassLoader.php
│  │  ├─ 📄installed.json
│  │  ├─ 📄installed.php
│  │  ├─ 📄InstalledVersions.php
│  │  ├─ 📄LICENSE
│  │  └─ 📄platform_check.php
│  ├─ 📁fig
│  │  └─ 📁http-message-util
│  │     ├─ 📁src
│  │     │  ├─ 📄RequestMethodInterface.php
│  │     │  └─ 📄StatusCodeInterface.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁lib
│  │  └─ 📁zklib
│  │     ├─ 📁docs
│  │     │  └─ 📄ZK_Communication_protocol_manual_CMD.pdf
│  │     ├─ 📁logs
│  │     │  └─ 📄.gitignore
│  │     ├─ 📁src
│  │     │  ├─ 📄Attendance.php
│  │     │  ├─ 📄Connect.php
│  │     │  ├─ 📄Device.php
│  │     │  ├─ 📄Face.php
│  │     │  ├─ 📄Fingerprint.php
│  │     │  ├─ 📄Os.php
│  │     │  ├─ 📄Pin.php
│  │     │  ├─ 📄Platform.php
│  │     │  ├─ 📄SerialNumber.php
│  │     │  ├─ 📄Ssr.php
│  │     │  ├─ 📄Time.php
│  │     │  ├─ 📄User.php
│  │     │  ├─ 📄Util.php
│  │     │  ├─ 📄Version.php
│  │     │  └─ 📄WorkCode.php
│  │     ├─ 📁vendor
│  │     │  ├─ 📁composer
│  │     │  │  ├─ 📄autoload_classmap.php
│  │     │  │  ├─ 📄autoload_namespaces.php
│  │     │  │  ├─ 📄autoload_psr4.php
│  │     │  │  ├─ 📄autoload_real.php
│  │     │  │  └─ 📄ClassLoader.php
│  │     │  └─ 📄autoload.php
│  │     └─ 📄ZKLib.php
│  ├─ 📁nikic
│  │  └─ 📁fast-route
│  │     ├─ 📁src
│  │     │  ├─ 📁DataGenerator
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄Std.php
│  │     │  ├─ 📄BadRouteException.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄DataGenerator.php
│  │     │  ├─ 📄Dispatcher.php
│  │     │  ├─ 📄functions.php
│  │     │  ├─ 📄Route.php
│  │     │  ├─ 📄RouteCollector.php
│  │     │  └─ 📄RouteParser.php
│  │     ├─ 📁test
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBasedTest.php
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄GroupCountBasedTest.php
│  │     │  │  ├─ 📄GroupPosBasedTest.php
│  │     │  │  └─ 📄MarkBasedTest.php
│  │     │  ├─ 📁HackTypechecker
│  │     │  │  ├─ 📁fixtures
│  │     │  │  │  ├─ 📄all_options.php
│  │     │  │  │  ├─ 📄empty_options.php
│  │     │  │  │  └─ 📄no_options.php
│  │     │  │  └─ 📄HackTypecheckerTest.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄StdTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  └─ 📄RouteCollectorTest.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.hhconfig
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄FastRoute.hhi
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     ├─ 📄psalm.xml
│  │     └─ 📄README.md
│  ├─ 📁psr
│  │  ├─ 📁container
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄ContainerExceptionInterface.php
│  │  │  │  ├─ 📄ContainerInterface.php
│  │  │  │  └─ 📄NotFoundExceptionInterface.php
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-factory
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄RequestFactoryInterface.php
│  │  │  │  ├─ 📄ResponseFactoryInterface.php
│  │  │  │  ├─ 📄ServerRequestFactoryInterface.php
│  │  │  │  ├─ 📄StreamFactoryInterface.php
│  │  │  │  ├─ 📄UploadedFileFactoryInterface.php
│  │  │  │  └─ 📄UriFactoryInterface.php
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄.pullapprove.yml
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-message
│  │  │  ├─ 📁docs
│  │  │  │  ├─ 📄PSR7-Interfaces.md
│  │  │  │  └─ 📄PSR7-Usage.md
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄MessageInterface.php
│  │  │  │  ├─ 📄RequestInterface.php
│  │  │  │  ├─ 📄ResponseInterface.php
│  │  │  │  ├─ 📄ServerRequestInterface.php
│  │  │  │  ├─ 📄StreamInterface.php
│  │  │  │  ├─ 📄UploadedFileInterface.php
│  │  │  │  └─ 📄UriInterface.php
│  │  │  ├─ 📄CHANGELOG.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-handler
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄RequestHandlerInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-middleware
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄MiddlewareInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  └─ 📁log
│  │     ├─ 📁src
│  │     │  ├─ 📄AbstractLogger.php
│  │     │  ├─ 📄InvalidArgumentException.php
│  │     │  ├─ 📄LoggerAwareInterface.php
│  │     │  ├─ 📄LoggerAwareTrait.php
│  │     │  ├─ 📄LoggerInterface.php
│  │     │  ├─ 📄LoggerTrait.php
│  │     │  ├─ 📄LogLevel.php
│  │     │  └─ 📄NullLogger.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁ralouphie
│  │  └─ 📁getallheaders
│  │     ├─ 📁src
│  │     │  └─ 📄getallheaders.php
│  │     ├─ 📁tests
│  │     │  └─ 📄GetAllHeadersTest.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     └─ 📄README.md
│  ├─ 📁slim
│  │  ├─ 📁psr7
│  │  │  ├─ 📁.github
│  │  │  │  ├─ 📁workflows
│  │  │  │  │  └─ 📄tests.yml
│  │  │  │  └─ 📄dependabot.yml
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactory.php
│  │  │  │  │  ├─ 📄ResponseFactory.php
│  │  │  │  │  ├─ 📄ServerRequestFactory.php
│  │  │  │  │  ├─ 📄StreamFactory.php
│  │  │  │  │  ├─ 📄UploadedFileFactory.php
│  │  │  │  │  └─ 📄UriFactory.php
│  │  │  │  ├─ 📁Interfaces
│  │  │  │  │  └─ 📄HeadersInterface.php
│  │  │  │  ├─ 📄Cookies.php
│  │  │  │  ├─ 📄Environment.php
│  │  │  │  ├─ 📄Header.php
│  │  │  │  ├─ 📄Headers.php
│  │  │  │  ├─ 📄Message.php
│  │  │  │  ├─ 📄NonBufferedBody.php
│  │  │  │  ├─ 📄Request.php
│  │  │  │  ├─ 📄Response.php
│  │  │  │  ├─ 📄Stream.php
│  │  │  │  ├─ 📄UploadedFile.php
│  │  │  │  └─ 📄Uri.php
│  │  │  ├─ 📁tests
│  │  │  │  ├─ 📁Assets
│  │  │  │  │  └─ 📄HeaderStack.php
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactoryTest.php
│  │  │  │  │  ├─ 📄ResponseFactoryTest.php
│  │  │  │  │  ├─ 📄ServerRequestFactoryTest.php
│  │  │  │  │  ├─ 📄StreamFactoryTest.php
│  │  │  │  │  ├─ 📄UploadedFileFactoryTest.php
│  │  │  │  │  └─ 📄UriFactoryTest.php
│  │  │  │  ├─ 📁Integration
│  │  │  │  │  ├─ 📄BaseTestFactories.php
│  │  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  │  ├─ 📄ServerRequestTest.php
│  │  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  │  └─ 📄UriTest.php
│  │  │  │  ├─ 📁Mocks
│  │  │  │  │  └─ 📄MessageStub.php
│  │  │  │  ├─ 📄BodyTest.php
│  │  │  │  ├─ 📄bootstrap.php
│  │  │  │  ├─ 📄CookiesTest.php
│  │  │  │  ├─ 📄EnvironmentTest.php
│  │  │  │  ├─ 📄HeadersTest.php
│  │  │  │  ├─ 📄HeaderTest.php
│  │  │  │  ├─ 📄MessageTest.php
│  │  │  │  ├─ 📄NonBufferedBodyTest.php
│  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  └─ 📄UriTest.php
│  │  │  ├─ 📄.codeclimate.yml
│  │  │  ├─ 📄.coveralls.yml
│  │  │  ├─ 📄.editorconfig
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄CODE_OF_CONDUCT.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄CONTRIBUTING.md
│  │  │  ├─ 📄LICENSE.md
│  │  │  ├─ 📄MAINTAINERS.md
│  │  │  ├─ 📄phpcs.xml
│  │  │  ├─ 📄phpstan.neon.dist
│  │  │  ├─ 📄phpunit.xml.dist
│  │  │  └─ 📄README.md
│  │  └─ 📁slim
│  │     ├─ 📁.github
│  │     │  ├─ 📁workflows
│  │     │  │  └─ 📄tests.yml
│  │     │  ├─ 📄dependabot.yml
│  │     │  └─ 📄FUNDING.yml
│  │     ├─ 📁Slim
│  │     │  ├─ 📁Error
│  │     │  │  ├─ 📁Renderers
│  │     │  │  │  ├─ 📄HtmlErrorRenderer.php
│  │     │  │  │  ├─ 📄JsonErrorRenderer.php
│  │     │  │  │  ├─ 📄PlainTextErrorRenderer.php
│  │     │  │  │  └─ 📄XmlErrorRenderer.php
│  │     │  │  └─ 📄AbstractErrorRenderer.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpBadRequestException.php
│  │     │  │  ├─ 📄HttpException.php
│  │     │  │  ├─ 📄HttpForbiddenException.php
│  │     │  │  ├─ 📄HttpGoneException.php
│  │     │  │  ├─ 📄HttpInternalServerErrorException.php
│  │     │  │  ├─ 📄HttpMethodNotAllowedException.php
│  │     │  │  ├─ 📄HttpNotFoundException.php
│  │     │  │  ├─ 📄HttpNotImplementedException.php
│  │     │  │  ├─ 📄HttpSpecializedException.php
│  │     │  │  └─ 📄HttpUnauthorizedException.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄GuzzlePsr17Factory.php
│  │     │  │  │  ├─ 📄HttpSoftPsr17Factory.php
│  │     │  │  │  ├─ 📄LaminasDiactorosPsr17Factory.php
│  │     │  │  │  ├─ 📄NyholmPsr17Factory.php
│  │     │  │  │  ├─ 📄Psr17Factory.php
│  │     │  │  │  ├─ 📄Psr17FactoryProvider.php
│  │     │  │  │  ├─ 📄ServerRequestCreator.php
│  │     │  │  │  ├─ 📄SlimHttpPsr17Factory.php
│  │     │  │  │  ├─ 📄SlimHttpServerRequestCreator.php
│  │     │  │  │  └─ 📄SlimPsr17Factory.php
│  │     │  │  ├─ 📄AppFactory.php
│  │     │  │  └─ 📄ServerRequestCreatorFactory.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  ├─ 📄RequestHandler.php
│  │     │  │  │  ├─ 📄RequestResponse.php
│  │     │  │  │  ├─ 📄RequestResponseArgs.php
│  │     │  │  │  └─ 📄RequestResponseNamedArgs.php
│  │     │  │  └─ 📄ErrorHandler.php
│  │     │  ├─ 📁Interfaces
│  │     │  │  ├─ 📄AdvancedCallableResolverInterface.php
│  │     │  │  ├─ 📄CallableResolverInterface.php
│  │     │  │  ├─ 📄DispatcherInterface.php
│  │     │  │  ├─ 📄ErrorHandlerInterface.php
│  │     │  │  ├─ 📄ErrorRendererInterface.php
│  │     │  │  ├─ 📄InvocationStrategyInterface.php
│  │     │  │  ├─ 📄MiddlewareDispatcherInterface.php
│  │     │  │  ├─ 📄Psr17FactoryInterface.php
│  │     │  │  ├─ 📄Psr17FactoryProviderInterface.php
│  │     │  │  ├─ 📄RequestHandlerInvocationStrategyInterface.php
│  │     │  │  ├─ 📄RouteCollectorInterface.php
│  │     │  │  ├─ 📄RouteCollectorProxyInterface.php
│  │     │  │  ├─ 📄RouteGroupInterface.php
│  │     │  │  ├─ 📄RouteInterface.php
│  │     │  │  ├─ 📄RouteParserInterface.php
│  │     │  │  ├─ 📄RouteResolverInterface.php
│  │     │  │  └─ 📄ServerRequestCreatorInterface.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddleware.php
│  │     │  │  ├─ 📄ContentLengthMiddleware.php
│  │     │  │  ├─ 📄ErrorMiddleware.php
│  │     │  │  ├─ 📄MethodOverrideMiddleware.php
│  │     │  │  ├─ 📄OutputBufferingMiddleware.php
│  │     │  │  └─ 📄RoutingMiddleware.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄Dispatcher.php
│  │     │  │  ├─ 📄FastRouteDispatcher.php
│  │     │  │  ├─ 📄Route.php
│  │     │  │  ├─ 📄RouteCollector.php
│  │     │  │  ├─ 📄RouteCollectorProxy.php
│  │     │  │  ├─ 📄RouteContext.php
│  │     │  │  ├─ 📄RouteGroup.php
│  │     │  │  ├─ 📄RouteParser.php
│  │     │  │  ├─ 📄RouteResolver.php
│  │     │  │  ├─ 📄RouteRunner.php
│  │     │  │  └─ 📄RoutingResults.php
│  │     │  ├─ 📄App.php
│  │     │  ├─ 📄CallableResolver.php
│  │     │  ├─ 📄Logger.php
│  │     │  ├─ 📄MiddlewareDispatcher.php
│  │     │  └─ 📄ResponseEmitter.php
│  │     ├─ 📁tests
│  │     │  ├─ 📁Assets
│  │     │  │  └─ 📄HeaderStack.php
│  │     │  ├─ 📁Error
│  │     │  │  └─ 📄AbstractErrorRendererTest.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpExceptionTest.php
│  │     │  │  └─ 📄HttpUnauthorizedExceptionTest.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄Psr17FactoryProviderTest.php
│  │     │  │  │  ├─ 📄Psr17FactoryTest.php
│  │     │  │  │  └─ 📄SlimHttpServerRequestCreatorTest.php
│  │     │  │  ├─ 📄AppFactoryTest.php
│  │     │  │  └─ 📄ServerRequestCreatorFactoryTest.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  └─ 📄RequestResponseNamedArgsTest.php
│  │     │  │  └─ 📄ErrorHandlerTest.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddlewareTest.php
│  │     │  │  ├─ 📄ContentLengthMiddlewareTest.php
│  │     │  │  ├─ 📄ErrorMiddlewareTest.php
│  │     │  │  ├─ 📄MethodOverrideMiddlewareTest.php
│  │     │  │  ├─ 📄OutputBufferingMiddlewareTest.php
│  │     │  │  └─ 📄RoutingMiddlewareTest.php
│  │     │  ├─ 📁Mocks
│  │     │  │  ├─ 📄CallableTest.php
│  │     │  │  ├─ 📄InvocationStrategyTest.php
│  │     │  │  ├─ 📄InvokableTest.php
│  │     │  │  ├─ 📄MiddlewareTest.php
│  │     │  │  ├─ 📄MockAction.php
│  │     │  │  ├─ 📄MockCustomException.php
│  │     │  │  ├─ 📄MockCustomRequestHandlerInvocationStrategy.php
│  │     │  │  ├─ 📄MockMiddlewareSlimCallable.php
│  │     │  │  ├─ 📄MockMiddlewareWithConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutInterface.php
│  │     │  │  ├─ 📄MockPsr17Factory.php
│  │     │  │  ├─ 📄MockPsr17FactoryWithoutStreamFactory.php
│  │     │  │  ├─ 📄MockRequestHandler.php
│  │     │  │  ├─ 📄MockSequenceMiddleware.php
│  │     │  │  ├─ 📄MockStream.php
│  │     │  │  ├─ 📄RequestHandlerTest.php
│  │     │  │  ├─ 📄SlowPokeStream.php
│  │     │  │  └─ 📄SmallChunksStream.php
│  │     │  ├─ 📁Providers
│  │     │  │  ├─ 📄PSR7ObjectProvider.php
│  │     │  │  └─ 📄PSR7ObjectProviderInterface.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄FastRouteDispatcherTest.php
│  │     │  │  ├─ 📄RouteCollectorProxyTest.php
│  │     │  │  ├─ 📄RouteCollectorTest.php
│  │     │  │  ├─ 📄RouteContextTest.php
│  │     │  │  ├─ 📄RouteParserTest.php
│  │     │  │  ├─ 📄RouteResolverTest.php
│  │     │  │  ├─ 📄RouteRunnerTest.php
│  │     │  │  └─ 📄RouteTest.php
│  │     │  ├─ 📄AppTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄CallableResolverTest.php
│  │     │  ├─ 📄MiddlewareDispatcherTest.php
│  │     │  ├─ 📄ResponseEmitterTest.php
│  │     │  └─ 📄TestCase.php
│  │     ├─ 📄.coveralls.yml
│  │     ├─ 📄.editorconfig
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄CODE_OF_CONDUCT.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄CONTRIBUTING.md
│  │     ├─ 📄LICENSE.md
│  │     ├─ 📄MAINTAINERS.md
│  │     ├─ 📄phpcs.xml.dist
│  │     ├─ 📄phpstan.neon.dist
│  │     ├─ 📄phpunit.xml.dist
│  │     ├─ 📄README.md
│  │     ├─ 📄SECURITY.md
│  │     └─ 📄UPGRADING.md
│  ├─ 📁symfony
│  │  └─ 📁polyfill-php80
│  │     ├─ 📁Resources
│  │     │  └─ 📁stubs
│  │     │     ├─ 📄Attribute.php
│  │     │     ├─ 📄PhpToken.php
│  │     │     ├─ 📄Stringable.php
│  │     │     ├─ 📄UnhandledMatchError.php
│  │     │     └─ 📄ValueError.php
│  │     ├─ 📄bootstrap.php
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄Php80.php
│  │     ├─ 📄PhpToken.php
│  │     └─ 📄README.md
│  └─ 📄autoload.php
├─ 📄asistencias.php
├─ 📄composer.json
├─ 📄composer.lock
├─ 📄conectar_dispositivo.php
├─ 📄config.php
├─ 📄crearUser.php
├─ 📄eliminarUser.php
├─ 📄example.php
├─ 📄obtenerUser.php
├─ 📄procesar_formulario.php
├─ 📄README.md
└─ 📄ZK-APIREST.rar
```
```
ZK-APIREST
├─ 📁app
│  └─ 📁src
│     ├─ 📁controllers
│     │  ├─ 📄AsistenciasC.php
│     │  └─ 📄UsuariosC.php
│     └─ 📁routes
│        ├─ 📄AsistenciasR.php
│        └─ 📄UsuariosR.php
├─ 📁public
│  ├─ 📄.htaccess
│  └─ 📄index.php
├─ 📁templates
│  └─ 📄example.html
├─ 📁tests
├─ 📁vendor
│  ├─ 📁composer
│  │  ├─ 📄autoload_classmap.php
│  │  ├─ 📄autoload_files.php
│  │  ├─ 📄autoload_namespaces.php
│  │  ├─ 📄autoload_psr4.php
│  │  ├─ 📄autoload_real.php
│  │  ├─ 📄autoload_static.php
│  │  ├─ 📄ClassLoader.php
│  │  ├─ 📄installed.json
│  │  ├─ 📄installed.php
│  │  ├─ 📄InstalledVersions.php
│  │  ├─ 📄LICENSE
│  │  └─ 📄platform_check.php
│  ├─ 📁fig
│  │  └─ 📁http-message-util
│  │     ├─ 📁src
│  │     │  ├─ 📄RequestMethodInterface.php
│  │     │  └─ 📄StatusCodeInterface.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁lib
│  │  └─ 📁zklib
│  │     ├─ 📁docs
│  │     │  └─ 📄ZK_Communication_protocol_manual_CMD.pdf
│  │     ├─ 📁logs
│  │     │  └─ 📄.gitignore
│  │     ├─ 📁src
│  │     │  ├─ 📄Attendance.php
│  │     │  ├─ 📄Connect.php
│  │     │  ├─ 📄Device.php
│  │     │  ├─ 📄Face.php
│  │     │  ├─ 📄Fingerprint.php
│  │     │  ├─ 📄Os.php
│  │     │  ├─ 📄Pin.php
│  │     │  ├─ 📄Platform.php
│  │     │  ├─ 📄SerialNumber.php
│  │     │  ├─ 📄Ssr.php
│  │     │  ├─ 📄Time.php
│  │     │  ├─ 📄User.php
│  │     │  ├─ 📄Util.php
│  │     │  ├─ 📄Version.php
│  │     │  └─ 📄WorkCode.php
│  │     ├─ 📁vendor
│  │     │  ├─ 📁composer
│  │     │  │  ├─ 📄autoload_classmap.php
│  │     │  │  ├─ 📄autoload_namespaces.php
│  │     │  │  ├─ 📄autoload_psr4.php
│  │     │  │  ├─ 📄autoload_real.php
│  │     │  │  └─ 📄ClassLoader.php
│  │     │  └─ 📄autoload.php
│  │     └─ 📄ZKLib.php
│  ├─ 📁nikic
│  │  └─ 📁fast-route
│  │     ├─ 📁src
│  │     │  ├─ 📁DataGenerator
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄Std.php
│  │     │  ├─ 📄BadRouteException.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄DataGenerator.php
│  │     │  ├─ 📄Dispatcher.php
│  │     │  ├─ 📄functions.php
│  │     │  ├─ 📄Route.php
│  │     │  ├─ 📄RouteCollector.php
│  │     │  └─ 📄RouteParser.php
│  │     ├─ 📁test
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBasedTest.php
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄GroupCountBasedTest.php
│  │     │  │  ├─ 📄GroupPosBasedTest.php
│  │     │  │  └─ 📄MarkBasedTest.php
│  │     │  ├─ 📁HackTypechecker
│  │     │  │  ├─ 📁fixtures
│  │     │  │  │  ├─ 📄all_options.php
│  │     │  │  │  ├─ 📄empty_options.php
│  │     │  │  │  └─ 📄no_options.php
│  │     │  │  └─ 📄HackTypecheckerTest.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄StdTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  └─ 📄RouteCollectorTest.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.hhconfig
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄FastRoute.hhi
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     ├─ 📄psalm.xml
│  │     └─ 📄README.md
│  ├─ 📁psr
│  │  ├─ 📁container
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄ContainerExceptionInterface.php
│  │  │  │  ├─ 📄ContainerInterface.php
│  │  │  │  └─ 📄NotFoundExceptionInterface.php
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-factory
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄RequestFactoryInterface.php
│  │  │  │  ├─ 📄ResponseFactoryInterface.php
│  │  │  │  ├─ 📄ServerRequestFactoryInterface.php
│  │  │  │  ├─ 📄StreamFactoryInterface.php
│  │  │  │  ├─ 📄UploadedFileFactoryInterface.php
│  │  │  │  └─ 📄UriFactoryInterface.php
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄.pullapprove.yml
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-message
│  │  │  ├─ 📁docs
│  │  │  │  ├─ 📄PSR7-Interfaces.md
│  │  │  │  └─ 📄PSR7-Usage.md
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄MessageInterface.php
│  │  │  │  ├─ 📄RequestInterface.php
│  │  │  │  ├─ 📄ResponseInterface.php
│  │  │  │  ├─ 📄ServerRequestInterface.php
│  │  │  │  ├─ 📄StreamInterface.php
│  │  │  │  ├─ 📄UploadedFileInterface.php
│  │  │  │  └─ 📄UriInterface.php
│  │  │  ├─ 📄CHANGELOG.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-handler
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄RequestHandlerInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-middleware
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄MiddlewareInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  └─ 📁log
│  │     ├─ 📁src
│  │     │  ├─ 📄AbstractLogger.php
│  │     │  ├─ 📄InvalidArgumentException.php
│  │     │  ├─ 📄LoggerAwareInterface.php
│  │     │  ├─ 📄LoggerAwareTrait.php
│  │     │  ├─ 📄LoggerInterface.php
│  │     │  ├─ 📄LoggerTrait.php
│  │     │  ├─ 📄LogLevel.php
│  │     │  └─ 📄NullLogger.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁ralouphie
│  │  └─ 📁getallheaders
│  │     ├─ 📁src
│  │     │  └─ 📄getallheaders.php
│  │     ├─ 📁tests
│  │     │  └─ 📄GetAllHeadersTest.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     └─ 📄README.md
│  ├─ 📁slim
│  │  ├─ 📁psr7
│  │  │  ├─ 📁.github
│  │  │  │  ├─ 📁workflows
│  │  │  │  │  └─ 📄tests.yml
│  │  │  │  └─ 📄dependabot.yml
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactory.php
│  │  │  │  │  ├─ 📄ResponseFactory.php
│  │  │  │  │  ├─ 📄ServerRequestFactory.php
│  │  │  │  │  ├─ 📄StreamFactory.php
│  │  │  │  │  ├─ 📄UploadedFileFactory.php
│  │  │  │  │  └─ 📄UriFactory.php
│  │  │  │  ├─ 📁Interfaces
│  │  │  │  │  └─ 📄HeadersInterface.php
│  │  │  │  ├─ 📄Cookies.php
│  │  │  │  ├─ 📄Environment.php
│  │  │  │  ├─ 📄Header.php
│  │  │  │  ├─ 📄Headers.php
│  │  │  │  ├─ 📄Message.php
│  │  │  │  ├─ 📄NonBufferedBody.php
│  │  │  │  ├─ 📄Request.php
│  │  │  │  ├─ 📄Response.php
│  │  │  │  ├─ 📄Stream.php
│  │  │  │  ├─ 📄UploadedFile.php
│  │  │  │  └─ 📄Uri.php
│  │  │  ├─ 📁tests
│  │  │  │  ├─ 📁Assets
│  │  │  │  │  └─ 📄HeaderStack.php
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactoryTest.php
│  │  │  │  │  ├─ 📄ResponseFactoryTest.php
│  │  │  │  │  ├─ 📄ServerRequestFactoryTest.php
│  │  │  │  │  ├─ 📄StreamFactoryTest.php
│  │  │  │  │  ├─ 📄UploadedFileFactoryTest.php
│  │  │  │  │  └─ 📄UriFactoryTest.php
│  │  │  │  ├─ 📁Integration
│  │  │  │  │  ├─ 📄BaseTestFactories.php
│  │  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  │  ├─ 📄ServerRequestTest.php
│  │  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  │  └─ 📄UriTest.php
│  │  │  │  ├─ 📁Mocks
│  │  │  │  │  └─ 📄MessageStub.php
│  │  │  │  ├─ 📄BodyTest.php
│  │  │  │  ├─ 📄bootstrap.php
│  │  │  │  ├─ 📄CookiesTest.php
│  │  │  │  ├─ 📄EnvironmentTest.php
│  │  │  │  ├─ 📄HeadersTest.php
│  │  │  │  ├─ 📄HeaderTest.php
│  │  │  │  ├─ 📄MessageTest.php
│  │  │  │  ├─ 📄NonBufferedBodyTest.php
│  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  └─ 📄UriTest.php
│  │  │  ├─ 📄.codeclimate.yml
│  │  │  ├─ 📄.coveralls.yml
│  │  │  ├─ 📄.editorconfig
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄CODE_OF_CONDUCT.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄CONTRIBUTING.md
│  │  │  ├─ 📄LICENSE.md
│  │  │  ├─ 📄MAINTAINERS.md
│  │  │  ├─ 📄phpcs.xml
│  │  │  ├─ 📄phpstan.neon.dist
│  │  │  ├─ 📄phpunit.xml.dist
│  │  │  └─ 📄README.md
│  │  └─ 📁slim
│  │     ├─ 📁.github
│  │     │  ├─ 📁workflows
│  │     │  │  └─ 📄tests.yml
│  │     │  ├─ 📄dependabot.yml
│  │     │  └─ 📄FUNDING.yml
│  │     ├─ 📁Slim
│  │     │  ├─ 📁Error
│  │     │  │  ├─ 📁Renderers
│  │     │  │  │  ├─ 📄HtmlErrorRenderer.php
│  │     │  │  │  ├─ 📄JsonErrorRenderer.php
│  │     │  │  │  ├─ 📄PlainTextErrorRenderer.php
│  │     │  │  │  └─ 📄XmlErrorRenderer.php
│  │     │  │  └─ 📄AbstractErrorRenderer.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpBadRequestException.php
│  │     │  │  ├─ 📄HttpException.php
│  │     │  │  ├─ 📄HttpForbiddenException.php
│  │     │  │  ├─ 📄HttpGoneException.php
│  │     │  │  ├─ 📄HttpInternalServerErrorException.php
│  │     │  │  ├─ 📄HttpMethodNotAllowedException.php
│  │     │  │  ├─ 📄HttpNotFoundException.php
│  │     │  │  ├─ 📄HttpNotImplementedException.php
│  │     │  │  ├─ 📄HttpSpecializedException.php
│  │     │  │  └─ 📄HttpUnauthorizedException.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄GuzzlePsr17Factory.php
│  │     │  │  │  ├─ 📄HttpSoftPsr17Factory.php
│  │     │  │  │  ├─ 📄LaminasDiactorosPsr17Factory.php
│  │     │  │  │  ├─ 📄NyholmPsr17Factory.php
│  │     │  │  │  ├─ 📄Psr17Factory.php
│  │     │  │  │  ├─ 📄Psr17FactoryProvider.php
│  │     │  │  │  ├─ 📄ServerRequestCreator.php
│  │     │  │  │  ├─ 📄SlimHttpPsr17Factory.php
│  │     │  │  │  ├─ 📄SlimHttpServerRequestCreator.php
│  │     │  │  │  └─ 📄SlimPsr17Factory.php
│  │     │  │  ├─ 📄AppFactory.php
│  │     │  │  └─ 📄ServerRequestCreatorFactory.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  ├─ 📄RequestHandler.php
│  │     │  │  │  ├─ 📄RequestResponse.php
│  │     │  │  │  ├─ 📄RequestResponseArgs.php
│  │     │  │  │  └─ 📄RequestResponseNamedArgs.php
│  │     │  │  └─ 📄ErrorHandler.php
│  │     │  ├─ 📁Interfaces
│  │     │  │  ├─ 📄AdvancedCallableResolverInterface.php
│  │     │  │  ├─ 📄CallableResolverInterface.php
│  │     │  │  ├─ 📄DispatcherInterface.php
│  │     │  │  ├─ 📄ErrorHandlerInterface.php
│  │     │  │  ├─ 📄ErrorRendererInterface.php
│  │     │  │  ├─ 📄InvocationStrategyInterface.php
│  │     │  │  ├─ 📄MiddlewareDispatcherInterface.php
│  │     │  │  ├─ 📄Psr17FactoryInterface.php
│  │     │  │  ├─ 📄Psr17FactoryProviderInterface.php
│  │     │  │  ├─ 📄RequestHandlerInvocationStrategyInterface.php
│  │     │  │  ├─ 📄RouteCollectorInterface.php
│  │     │  │  ├─ 📄RouteCollectorProxyInterface.php
│  │     │  │  ├─ 📄RouteGroupInterface.php
│  │     │  │  ├─ 📄RouteInterface.php
│  │     │  │  ├─ 📄RouteParserInterface.php
│  │     │  │  ├─ 📄RouteResolverInterface.php
│  │     │  │  └─ 📄ServerRequestCreatorInterface.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddleware.php
│  │     │  │  ├─ 📄ContentLengthMiddleware.php
│  │     │  │  ├─ 📄ErrorMiddleware.php
│  │     │  │  ├─ 📄MethodOverrideMiddleware.php
│  │     │  │  ├─ 📄OutputBufferingMiddleware.php
│  │     │  │  └─ 📄RoutingMiddleware.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄Dispatcher.php
│  │     │  │  ├─ 📄FastRouteDispatcher.php
│  │     │  │  ├─ 📄Route.php
│  │     │  │  ├─ 📄RouteCollector.php
│  │     │  │  ├─ 📄RouteCollectorProxy.php
│  │     │  │  ├─ 📄RouteContext.php
│  │     │  │  ├─ 📄RouteGroup.php
│  │     │  │  ├─ 📄RouteParser.php
│  │     │  │  ├─ 📄RouteResolver.php
│  │     │  │  ├─ 📄RouteRunner.php
│  │     │  │  └─ 📄RoutingResults.php
│  │     │  ├─ 📄App.php
│  │     │  ├─ 📄CallableResolver.php
│  │     │  ├─ 📄Logger.php
│  │     │  ├─ 📄MiddlewareDispatcher.php
│  │     │  └─ 📄ResponseEmitter.php
│  │     ├─ 📁tests
│  │     │  ├─ 📁Assets
│  │     │  │  └─ 📄HeaderStack.php
│  │     │  ├─ 📁Error
│  │     │  │  └─ 📄AbstractErrorRendererTest.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpExceptionTest.php
│  │     │  │  └─ 📄HttpUnauthorizedExceptionTest.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄Psr17FactoryProviderTest.php
│  │     │  │  │  ├─ 📄Psr17FactoryTest.php
│  │     │  │  │  └─ 📄SlimHttpServerRequestCreatorTest.php
│  │     │  │  ├─ 📄AppFactoryTest.php
│  │     │  │  └─ 📄ServerRequestCreatorFactoryTest.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  └─ 📄RequestResponseNamedArgsTest.php
│  │     │  │  └─ 📄ErrorHandlerTest.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddlewareTest.php
│  │     │  │  ├─ 📄ContentLengthMiddlewareTest.php
│  │     │  │  ├─ 📄ErrorMiddlewareTest.php
│  │     │  │  ├─ 📄MethodOverrideMiddlewareTest.php
│  │     │  │  ├─ 📄OutputBufferingMiddlewareTest.php
│  │     │  │  └─ 📄RoutingMiddlewareTest.php
│  │     │  ├─ 📁Mocks
│  │     │  │  ├─ 📄CallableTest.php
│  │     │  │  ├─ 📄InvocationStrategyTest.php
│  │     │  │  ├─ 📄InvokableTest.php
│  │     │  │  ├─ 📄MiddlewareTest.php
│  │     │  │  ├─ 📄MockAction.php
│  │     │  │  ├─ 📄MockCustomException.php
│  │     │  │  ├─ 📄MockCustomRequestHandlerInvocationStrategy.php
│  │     │  │  ├─ 📄MockMiddlewareSlimCallable.php
│  │     │  │  ├─ 📄MockMiddlewareWithConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutInterface.php
│  │     │  │  ├─ 📄MockPsr17Factory.php
│  │     │  │  ├─ 📄MockPsr17FactoryWithoutStreamFactory.php
│  │     │  │  ├─ 📄MockRequestHandler.php
│  │     │  │  ├─ 📄MockSequenceMiddleware.php
│  │     │  │  ├─ 📄MockStream.php
│  │     │  │  ├─ 📄RequestHandlerTest.php
│  │     │  │  ├─ 📄SlowPokeStream.php
│  │     │  │  └─ 📄SmallChunksStream.php
│  │     │  ├─ 📁Providers
│  │     │  │  ├─ 📄PSR7ObjectProvider.php
│  │     │  │  └─ 📄PSR7ObjectProviderInterface.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄FastRouteDispatcherTest.php
│  │     │  │  ├─ 📄RouteCollectorProxyTest.php
│  │     │  │  ├─ 📄RouteCollectorTest.php
│  │     │  │  ├─ 📄RouteContextTest.php
│  │     │  │  ├─ 📄RouteParserTest.php
│  │     │  │  ├─ 📄RouteResolverTest.php
│  │     │  │  ├─ 📄RouteRunnerTest.php
│  │     │  │  └─ 📄RouteTest.php
│  │     │  ├─ 📄AppTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄CallableResolverTest.php
│  │     │  ├─ 📄MiddlewareDispatcherTest.php
│  │     │  ├─ 📄ResponseEmitterTest.php
│  │     │  └─ 📄TestCase.php
│  │     ├─ 📄.coveralls.yml
│  │     ├─ 📄.editorconfig
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄CODE_OF_CONDUCT.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄CONTRIBUTING.md
│  │     ├─ 📄LICENSE.md
│  │     ├─ 📄MAINTAINERS.md
│  │     ├─ 📄phpcs.xml.dist
│  │     ├─ 📄phpstan.neon.dist
│  │     ├─ 📄phpunit.xml.dist
│  │     ├─ 📄README.md
│  │     ├─ 📄SECURITY.md
│  │     └─ 📄UPGRADING.md
│  ├─ 📁symfony
│  │  └─ 📁polyfill-php80
│  │     ├─ 📁Resources
│  │     │  └─ 📁stubs
│  │     │     ├─ 📄Attribute.php
│  │     │     ├─ 📄PhpToken.php
│  │     │     ├─ 📄Stringable.php
│  │     │     ├─ 📄UnhandledMatchError.php
│  │     │     └─ 📄ValueError.php
│  │     ├─ 📄bootstrap.php
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄Php80.php
│  │     ├─ 📄PhpToken.php
│  │     └─ 📄README.md
│  └─ 📄autoload.php
├─ 📄asistencias.php
├─ 📄composer.json
├─ 📄composer.lock
├─ 📄conectar_dispositivo.php
├─ 📄config.php
├─ 📄crearUser.php
├─ 📄eliminarUser.php
├─ 📄example.php
├─ 📄obtenerUser.php
├─ 📄procesar_formulario.php
├─ 📄README.md
└─ 📄ZK-APIREST.rar
```
```
ZK-APIREST
├─ 📁app
│  └─ 📁src
│     ├─ 📁controllers
│     │  ├─ 📄AsistenciasC.php
│     │  └─ 📄UsuariosC.php
│     └─ 📁routes
│        ├─ 📄AsistenciasR.php
│        └─ 📄UsuariosR.php
├─ 📁public
│  ├─ 📄.htaccess
│  └─ 📄index.php
├─ 📁templates
│  └─ 📄example.html
├─ 📁tests
├─ 📁vendor
│  ├─ 📁composer
│  │  ├─ 📄autoload_classmap.php
│  │  ├─ 📄autoload_files.php
│  │  ├─ 📄autoload_namespaces.php
│  │  ├─ 📄autoload_psr4.php
│  │  ├─ 📄autoload_real.php
│  │  ├─ 📄autoload_static.php
│  │  ├─ 📄ClassLoader.php
│  │  ├─ 📄installed.json
│  │  ├─ 📄installed.php
│  │  ├─ 📄InstalledVersions.php
│  │  ├─ 📄LICENSE
│  │  └─ 📄platform_check.php
│  ├─ 📁fig
│  │  └─ 📁http-message-util
│  │     ├─ 📁src
│  │     │  ├─ 📄RequestMethodInterface.php
│  │     │  └─ 📄StatusCodeInterface.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁lib
│  │  └─ 📁zklib
│  │     ├─ 📁docs
│  │     │  └─ 📄ZK_Communication_protocol_manual_CMD.pdf
│  │     ├─ 📁logs
│  │     │  └─ 📄.gitignore
│  │     ├─ 📁src
│  │     │  ├─ 📄Attendance.php
│  │     │  ├─ 📄Connect.php
│  │     │  ├─ 📄Device.php
│  │     │  ├─ 📄Face.php
│  │     │  ├─ 📄Fingerprint.php
│  │     │  ├─ 📄Os.php
│  │     │  ├─ 📄Pin.php
│  │     │  ├─ 📄Platform.php
│  │     │  ├─ 📄SerialNumber.php
│  │     │  ├─ 📄Ssr.php
│  │     │  ├─ 📄Time.php
│  │     │  ├─ 📄User.php
│  │     │  ├─ 📄Util.php
│  │     │  ├─ 📄Version.php
│  │     │  └─ 📄WorkCode.php
│  │     ├─ 📁vendor
│  │     │  ├─ 📁composer
│  │     │  │  ├─ 📄autoload_classmap.php
│  │     │  │  ├─ 📄autoload_namespaces.php
│  │     │  │  ├─ 📄autoload_psr4.php
│  │     │  │  ├─ 📄autoload_real.php
│  │     │  │  └─ 📄ClassLoader.php
│  │     │  └─ 📄autoload.php
│  │     └─ 📄ZKLib.php
│  ├─ 📁nikic
│  │  └─ 📁fast-route
│  │     ├─ 📁src
│  │     │  ├─ 📁DataGenerator
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄Std.php
│  │     │  ├─ 📄BadRouteException.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄DataGenerator.php
│  │     │  ├─ 📄Dispatcher.php
│  │     │  ├─ 📄functions.php
│  │     │  ├─ 📄Route.php
│  │     │  ├─ 📄RouteCollector.php
│  │     │  └─ 📄RouteParser.php
│  │     ├─ 📁test
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBasedTest.php
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄GroupCountBasedTest.php
│  │     │  │  ├─ 📄GroupPosBasedTest.php
│  │     │  │  └─ 📄MarkBasedTest.php
│  │     │  ├─ 📁HackTypechecker
│  │     │  │  ├─ 📁fixtures
│  │     │  │  │  ├─ 📄all_options.php
│  │     │  │  │  ├─ 📄empty_options.php
│  │     │  │  │  └─ 📄no_options.php
│  │     │  │  └─ 📄HackTypecheckerTest.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄StdTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  └─ 📄RouteCollectorTest.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.hhconfig
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄FastRoute.hhi
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     ├─ 📄psalm.xml
│  │     └─ 📄README.md
│  ├─ 📁psr
│  │  ├─ 📁container
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄ContainerExceptionInterface.php
│  │  │  │  ├─ 📄ContainerInterface.php
│  │  │  │  └─ 📄NotFoundExceptionInterface.php
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-factory
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄RequestFactoryInterface.php
│  │  │  │  ├─ 📄ResponseFactoryInterface.php
│  │  │  │  ├─ 📄ServerRequestFactoryInterface.php
│  │  │  │  ├─ 📄StreamFactoryInterface.php
│  │  │  │  ├─ 📄UploadedFileFactoryInterface.php
│  │  │  │  └─ 📄UriFactoryInterface.php
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄.pullapprove.yml
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-message
│  │  │  ├─ 📁docs
│  │  │  │  ├─ 📄PSR7-Interfaces.md
│  │  │  │  └─ 📄PSR7-Usage.md
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄MessageInterface.php
│  │  │  │  ├─ 📄RequestInterface.php
│  │  │  │  ├─ 📄ResponseInterface.php
│  │  │  │  ├─ 📄ServerRequestInterface.php
│  │  │  │  ├─ 📄StreamInterface.php
│  │  │  │  ├─ 📄UploadedFileInterface.php
│  │  │  │  └─ 📄UriInterface.php
│  │  │  ├─ 📄CHANGELOG.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-handler
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄RequestHandlerInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-middleware
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄MiddlewareInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  └─ 📁log
│  │     ├─ 📁src
│  │     │  ├─ 📄AbstractLogger.php
│  │     │  ├─ 📄InvalidArgumentException.php
│  │     │  ├─ 📄LoggerAwareInterface.php
│  │     │  ├─ 📄LoggerAwareTrait.php
│  │     │  ├─ 📄LoggerInterface.php
│  │     │  ├─ 📄LoggerTrait.php
│  │     │  ├─ 📄LogLevel.php
│  │     │  └─ 📄NullLogger.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁ralouphie
│  │  └─ 📁getallheaders
│  │     ├─ 📁src
│  │     │  └─ 📄getallheaders.php
│  │     ├─ 📁tests
│  │     │  └─ 📄GetAllHeadersTest.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     └─ 📄README.md
│  ├─ 📁slim
│  │  ├─ 📁psr7
│  │  │  ├─ 📁.github
│  │  │  │  ├─ 📁workflows
│  │  │  │  │  └─ 📄tests.yml
│  │  │  │  └─ 📄dependabot.yml
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactory.php
│  │  │  │  │  ├─ 📄ResponseFactory.php
│  │  │  │  │  ├─ 📄ServerRequestFactory.php
│  │  │  │  │  ├─ 📄StreamFactory.php
│  │  │  │  │  ├─ 📄UploadedFileFactory.php
│  │  │  │  │  └─ 📄UriFactory.php
│  │  │  │  ├─ 📁Interfaces
│  │  │  │  │  └─ 📄HeadersInterface.php
│  │  │  │  ├─ 📄Cookies.php
│  │  │  │  ├─ 📄Environment.php
│  │  │  │  ├─ 📄Header.php
│  │  │  │  ├─ 📄Headers.php
│  │  │  │  ├─ 📄Message.php
│  │  │  │  ├─ 📄NonBufferedBody.php
│  │  │  │  ├─ 📄Request.php
│  │  │  │  ├─ 📄Response.php
│  │  │  │  ├─ 📄Stream.php
│  │  │  │  ├─ 📄UploadedFile.php
│  │  │  │  └─ 📄Uri.php
│  │  │  ├─ 📁tests
│  │  │  │  ├─ 📁Assets
│  │  │  │  │  └─ 📄HeaderStack.php
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactoryTest.php
│  │  │  │  │  ├─ 📄ResponseFactoryTest.php
│  │  │  │  │  ├─ 📄ServerRequestFactoryTest.php
│  │  │  │  │  ├─ 📄StreamFactoryTest.php
│  │  │  │  │  ├─ 📄UploadedFileFactoryTest.php
│  │  │  │  │  └─ 📄UriFactoryTest.php
│  │  │  │  ├─ 📁Integration
│  │  │  │  │  ├─ 📄BaseTestFactories.php
│  │  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  │  ├─ 📄ServerRequestTest.php
│  │  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  │  └─ 📄UriTest.php
│  │  │  │  ├─ 📁Mocks
│  │  │  │  │  └─ 📄MessageStub.php
│  │  │  │  ├─ 📄BodyTest.php
│  │  │  │  ├─ 📄bootstrap.php
│  │  │  │  ├─ 📄CookiesTest.php
│  │  │  │  ├─ 📄EnvironmentTest.php
│  │  │  │  ├─ 📄HeadersTest.php
│  │  │  │  ├─ 📄HeaderTest.php
│  │  │  │  ├─ 📄MessageTest.php
│  │  │  │  ├─ 📄NonBufferedBodyTest.php
│  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  └─ 📄UriTest.php
│  │  │  ├─ 📄.codeclimate.yml
│  │  │  ├─ 📄.coveralls.yml
│  │  │  ├─ 📄.editorconfig
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄CODE_OF_CONDUCT.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄CONTRIBUTING.md
│  │  │  ├─ 📄LICENSE.md
│  │  │  ├─ 📄MAINTAINERS.md
│  │  │  ├─ 📄phpcs.xml
│  │  │  ├─ 📄phpstan.neon.dist
│  │  │  ├─ 📄phpunit.xml.dist
│  │  │  └─ 📄README.md
│  │  └─ 📁slim
│  │     ├─ 📁.github
│  │     │  ├─ 📁workflows
│  │     │  │  └─ 📄tests.yml
│  │     │  ├─ 📄dependabot.yml
│  │     │  └─ 📄FUNDING.yml
│  │     ├─ 📁Slim
│  │     │  ├─ 📁Error
│  │     │  │  ├─ 📁Renderers
│  │     │  │  │  ├─ 📄HtmlErrorRenderer.php
│  │     │  │  │  ├─ 📄JsonErrorRenderer.php
│  │     │  │  │  ├─ 📄PlainTextErrorRenderer.php
│  │     │  │  │  └─ 📄XmlErrorRenderer.php
│  │     │  │  └─ 📄AbstractErrorRenderer.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpBadRequestException.php
│  │     │  │  ├─ 📄HttpException.php
│  │     │  │  ├─ 📄HttpForbiddenException.php
│  │     │  │  ├─ 📄HttpGoneException.php
│  │     │  │  ├─ 📄HttpInternalServerErrorException.php
│  │     │  │  ├─ 📄HttpMethodNotAllowedException.php
│  │     │  │  ├─ 📄HttpNotFoundException.php
│  │     │  │  ├─ 📄HttpNotImplementedException.php
│  │     │  │  ├─ 📄HttpSpecializedException.php
│  │     │  │  └─ 📄HttpUnauthorizedException.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄GuzzlePsr17Factory.php
│  │     │  │  │  ├─ 📄HttpSoftPsr17Factory.php
│  │     │  │  │  ├─ 📄LaminasDiactorosPsr17Factory.php
│  │     │  │  │  ├─ 📄NyholmPsr17Factory.php
│  │     │  │  │  ├─ 📄Psr17Factory.php
│  │     │  │  │  ├─ 📄Psr17FactoryProvider.php
│  │     │  │  │  ├─ 📄ServerRequestCreator.php
│  │     │  │  │  ├─ 📄SlimHttpPsr17Factory.php
│  │     │  │  │  ├─ 📄SlimHttpServerRequestCreator.php
│  │     │  │  │  └─ 📄SlimPsr17Factory.php
│  │     │  │  ├─ 📄AppFactory.php
│  │     │  │  └─ 📄ServerRequestCreatorFactory.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  ├─ 📄RequestHandler.php
│  │     │  │  │  ├─ 📄RequestResponse.php
│  │     │  │  │  ├─ 📄RequestResponseArgs.php
│  │     │  │  │  └─ 📄RequestResponseNamedArgs.php
│  │     │  │  └─ 📄ErrorHandler.php
│  │     │  ├─ 📁Interfaces
│  │     │  │  ├─ 📄AdvancedCallableResolverInterface.php
│  │     │  │  ├─ 📄CallableResolverInterface.php
│  │     │  │  ├─ 📄DispatcherInterface.php
│  │     │  │  ├─ 📄ErrorHandlerInterface.php
│  │     │  │  ├─ 📄ErrorRendererInterface.php
│  │     │  │  ├─ 📄InvocationStrategyInterface.php
│  │     │  │  ├─ 📄MiddlewareDispatcherInterface.php
│  │     │  │  ├─ 📄Psr17FactoryInterface.php
│  │     │  │  ├─ 📄Psr17FactoryProviderInterface.php
│  │     │  │  ├─ 📄RequestHandlerInvocationStrategyInterface.php
│  │     │  │  ├─ 📄RouteCollectorInterface.php
│  │     │  │  ├─ 📄RouteCollectorProxyInterface.php
│  │     │  │  ├─ 📄RouteGroupInterface.php
│  │     │  │  ├─ 📄RouteInterface.php
│  │     │  │  ├─ 📄RouteParserInterface.php
│  │     │  │  ├─ 📄RouteResolverInterface.php
│  │     │  │  └─ 📄ServerRequestCreatorInterface.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddleware.php
│  │     │  │  ├─ 📄ContentLengthMiddleware.php
│  │     │  │  ├─ 📄ErrorMiddleware.php
│  │     │  │  ├─ 📄MethodOverrideMiddleware.php
│  │     │  │  ├─ 📄OutputBufferingMiddleware.php
│  │     │  │  └─ 📄RoutingMiddleware.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄Dispatcher.php
│  │     │  │  ├─ 📄FastRouteDispatcher.php
│  │     │  │  ├─ 📄Route.php
│  │     │  │  ├─ 📄RouteCollector.php
│  │     │  │  ├─ 📄RouteCollectorProxy.php
│  │     │  │  ├─ 📄RouteContext.php
│  │     │  │  ├─ 📄RouteGroup.php
│  │     │  │  ├─ 📄RouteParser.php
│  │     │  │  ├─ 📄RouteResolver.php
│  │     │  │  ├─ 📄RouteRunner.php
│  │     │  │  └─ 📄RoutingResults.php
│  │     │  ├─ 📄App.php
│  │     │  ├─ 📄CallableResolver.php
│  │     │  ├─ 📄Logger.php
│  │     │  ├─ 📄MiddlewareDispatcher.php
│  │     │  └─ 📄ResponseEmitter.php
│  │     ├─ 📁tests
│  │     │  ├─ 📁Assets
│  │     │  │  └─ 📄HeaderStack.php
│  │     │  ├─ 📁Error
│  │     │  │  └─ 📄AbstractErrorRendererTest.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpExceptionTest.php
│  │     │  │  └─ 📄HttpUnauthorizedExceptionTest.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄Psr17FactoryProviderTest.php
│  │     │  │  │  ├─ 📄Psr17FactoryTest.php
│  │     │  │  │  └─ 📄SlimHttpServerRequestCreatorTest.php
│  │     │  │  ├─ 📄AppFactoryTest.php
│  │     │  │  └─ 📄ServerRequestCreatorFactoryTest.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  └─ 📄RequestResponseNamedArgsTest.php
│  │     │  │  └─ 📄ErrorHandlerTest.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddlewareTest.php
│  │     │  │  ├─ 📄ContentLengthMiddlewareTest.php
│  │     │  │  ├─ 📄ErrorMiddlewareTest.php
│  │     │  │  ├─ 📄MethodOverrideMiddlewareTest.php
│  │     │  │  ├─ 📄OutputBufferingMiddlewareTest.php
│  │     │  │  └─ 📄RoutingMiddlewareTest.php
│  │     │  ├─ 📁Mocks
│  │     │  │  ├─ 📄CallableTest.php
│  │     │  │  ├─ 📄InvocationStrategyTest.php
│  │     │  │  ├─ 📄InvokableTest.php
│  │     │  │  ├─ 📄MiddlewareTest.php
│  │     │  │  ├─ 📄MockAction.php
│  │     │  │  ├─ 📄MockCustomException.php
│  │     │  │  ├─ 📄MockCustomRequestHandlerInvocationStrategy.php
│  │     │  │  ├─ 📄MockMiddlewareSlimCallable.php
│  │     │  │  ├─ 📄MockMiddlewareWithConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutInterface.php
│  │     │  │  ├─ 📄MockPsr17Factory.php
│  │     │  │  ├─ 📄MockPsr17FactoryWithoutStreamFactory.php
│  │     │  │  ├─ 📄MockRequestHandler.php
│  │     │  │  ├─ 📄MockSequenceMiddleware.php
│  │     │  │  ├─ 📄MockStream.php
│  │     │  │  ├─ 📄RequestHandlerTest.php
│  │     │  │  ├─ 📄SlowPokeStream.php
│  │     │  │  └─ 📄SmallChunksStream.php
│  │     │  ├─ 📁Providers
│  │     │  │  ├─ 📄PSR7ObjectProvider.php
│  │     │  │  └─ 📄PSR7ObjectProviderInterface.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄FastRouteDispatcherTest.php
│  │     │  │  ├─ 📄RouteCollectorProxyTest.php
│  │     │  │  ├─ 📄RouteCollectorTest.php
│  │     │  │  ├─ 📄RouteContextTest.php
│  │     │  │  ├─ 📄RouteParserTest.php
│  │     │  │  ├─ 📄RouteResolverTest.php
│  │     │  │  ├─ 📄RouteRunnerTest.php
│  │     │  │  └─ 📄RouteTest.php
│  │     │  ├─ 📄AppTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄CallableResolverTest.php
│  │     │  ├─ 📄MiddlewareDispatcherTest.php
│  │     │  ├─ 📄ResponseEmitterTest.php
│  │     │  └─ 📄TestCase.php
│  │     ├─ 📄.coveralls.yml
│  │     ├─ 📄.editorconfig
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄CODE_OF_CONDUCT.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄CONTRIBUTING.md
│  │     ├─ 📄LICENSE.md
│  │     ├─ 📄MAINTAINERS.md
│  │     ├─ 📄phpcs.xml.dist
│  │     ├─ 📄phpstan.neon.dist
│  │     ├─ 📄phpunit.xml.dist
│  │     ├─ 📄README.md
│  │     ├─ 📄SECURITY.md
│  │     └─ 📄UPGRADING.md
│  ├─ 📁symfony
│  │  └─ 📁polyfill-php80
│  │     ├─ 📁Resources
│  │     │  └─ 📁stubs
│  │     │     ├─ 📄Attribute.php
│  │     │     ├─ 📄PhpToken.php
│  │     │     ├─ 📄Stringable.php
│  │     │     ├─ 📄UnhandledMatchError.php
│  │     │     └─ 📄ValueError.php
│  │     ├─ 📄bootstrap.php
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄Php80.php
│  │     ├─ 📄PhpToken.php
│  │     └─ 📄README.md
│  └─ 📄autoload.php
├─ 📄asistencias.php
├─ 📄composer.json
├─ 📄composer.lock
├─ 📄conectar_dispositivo.php
├─ 📄config.php
├─ 📄crearUser.php
├─ 📄eliminarUser.php
├─ 📄example.php
├─ 📄obtenerUser.php
├─ 📄procesar_formulario.php
├─ 📄README.md
└─ 📄ZK-APIREST.rar
```
```
ZK-APIREST
├─ 📁app
│  └─ 📁src
│     ├─ 📁controllers
│     │  ├─ 📄AsistenciasC.php
│     │  └─ 📄UsuariosC.php
│     └─ 📁routes
│        ├─ 📄AsistenciasR.php
│        └─ 📄UsuariosR.php
├─ 📁public
│  ├─ 📄.htaccess
│  └─ 📄index.php
├─ 📁templates
│  └─ 📄example.html
├─ 📁tests
├─ 📁vendor
│  ├─ 📁composer
│  │  ├─ 📄autoload_classmap.php
│  │  ├─ 📄autoload_files.php
│  │  ├─ 📄autoload_namespaces.php
│  │  ├─ 📄autoload_psr4.php
│  │  ├─ 📄autoload_real.php
│  │  ├─ 📄autoload_static.php
│  │  ├─ 📄ClassLoader.php
│  │  ├─ 📄installed.json
│  │  ├─ 📄installed.php
│  │  ├─ 📄InstalledVersions.php
│  │  ├─ 📄LICENSE
│  │  └─ 📄platform_check.php
│  ├─ 📁fig
│  │  └─ 📁http-message-util
│  │     ├─ 📁src
│  │     │  ├─ 📄RequestMethodInterface.php
│  │     │  └─ 📄StatusCodeInterface.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁lib
│  │  └─ 📁zklib
│  │     ├─ 📁docs
│  │     │  └─ 📄ZK_Communication_protocol_manual_CMD.pdf
│  │     ├─ 📁logs
│  │     │  └─ 📄.gitignore
│  │     ├─ 📁src
│  │     │  ├─ 📄Attendance.php
│  │     │  ├─ 📄Connect.php
│  │     │  ├─ 📄Device.php
│  │     │  ├─ 📄Face.php
│  │     │  ├─ 📄Fingerprint.php
│  │     │  ├─ 📄Os.php
│  │     │  ├─ 📄Pin.php
│  │     │  ├─ 📄Platform.php
│  │     │  ├─ 📄SerialNumber.php
│  │     │  ├─ 📄Ssr.php
│  │     │  ├─ 📄Time.php
│  │     │  ├─ 📄User.php
│  │     │  ├─ 📄Util.php
│  │     │  ├─ 📄Version.php
│  │     │  └─ 📄WorkCode.php
│  │     ├─ 📁vendor
│  │     │  ├─ 📁composer
│  │     │  │  ├─ 📄autoload_classmap.php
│  │     │  │  ├─ 📄autoload_namespaces.php
│  │     │  │  ├─ 📄autoload_psr4.php
│  │     │  │  ├─ 📄autoload_real.php
│  │     │  │  └─ 📄ClassLoader.php
│  │     │  └─ 📄autoload.php
│  │     └─ 📄ZKLib.php
│  ├─ 📁nikic
│  │  └─ 📁fast-route
│  │     ├─ 📁src
│  │     │  ├─ 📁DataGenerator
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄Std.php
│  │     │  ├─ 📄BadRouteException.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄DataGenerator.php
│  │     │  ├─ 📄Dispatcher.php
│  │     │  ├─ 📄functions.php
│  │     │  ├─ 📄Route.php
│  │     │  ├─ 📄RouteCollector.php
│  │     │  └─ 📄RouteParser.php
│  │     ├─ 📁test
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBasedTest.php
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄GroupCountBasedTest.php
│  │     │  │  ├─ 📄GroupPosBasedTest.php
│  │     │  │  └─ 📄MarkBasedTest.php
│  │     │  ├─ 📁HackTypechecker
│  │     │  │  ├─ 📁fixtures
│  │     │  │  │  ├─ 📄all_options.php
│  │     │  │  │  ├─ 📄empty_options.php
│  │     │  │  │  └─ 📄no_options.php
│  │     │  │  └─ 📄HackTypecheckerTest.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄StdTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  └─ 📄RouteCollectorTest.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.hhconfig
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄FastRoute.hhi
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     ├─ 📄psalm.xml
│  │     └─ 📄README.md
│  ├─ 📁psr
│  │  ├─ 📁container
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄ContainerExceptionInterface.php
│  │  │  │  ├─ 📄ContainerInterface.php
│  │  │  │  └─ 📄NotFoundExceptionInterface.php
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-factory
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄RequestFactoryInterface.php
│  │  │  │  ├─ 📄ResponseFactoryInterface.php
│  │  │  │  ├─ 📄ServerRequestFactoryInterface.php
│  │  │  │  ├─ 📄StreamFactoryInterface.php
│  │  │  │  ├─ 📄UploadedFileFactoryInterface.php
│  │  │  │  └─ 📄UriFactoryInterface.php
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄.pullapprove.yml
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-message
│  │  │  ├─ 📁docs
│  │  │  │  ├─ 📄PSR7-Interfaces.md
│  │  │  │  └─ 📄PSR7-Usage.md
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄MessageInterface.php
│  │  │  │  ├─ 📄RequestInterface.php
│  │  │  │  ├─ 📄ResponseInterface.php
│  │  │  │  ├─ 📄ServerRequestInterface.php
│  │  │  │  ├─ 📄StreamInterface.php
│  │  │  │  ├─ 📄UploadedFileInterface.php
│  │  │  │  └─ 📄UriInterface.php
│  │  │  ├─ 📄CHANGELOG.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-handler
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄RequestHandlerInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-middleware
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄MiddlewareInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  └─ 📁log
│  │     ├─ 📁src
│  │     │  ├─ 📄AbstractLogger.php
│  │     │  ├─ 📄InvalidArgumentException.php
│  │     │  ├─ 📄LoggerAwareInterface.php
│  │     │  ├─ 📄LoggerAwareTrait.php
│  │     │  ├─ 📄LoggerInterface.php
│  │     │  ├─ 📄LoggerTrait.php
│  │     │  ├─ 📄LogLevel.php
│  │     │  └─ 📄NullLogger.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁ralouphie
│  │  └─ 📁getallheaders
│  │     ├─ 📁src
│  │     │  └─ 📄getallheaders.php
│  │     ├─ 📁tests
│  │     │  └─ 📄GetAllHeadersTest.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     └─ 📄README.md
│  ├─ 📁slim
│  │  ├─ 📁psr7
│  │  │  ├─ 📁.github
│  │  │  │  ├─ 📁workflows
│  │  │  │  │  └─ 📄tests.yml
│  │  │  │  └─ 📄dependabot.yml
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactory.php
│  │  │  │  │  ├─ 📄ResponseFactory.php
│  │  │  │  │  ├─ 📄ServerRequestFactory.php
│  │  │  │  │  ├─ 📄StreamFactory.php
│  │  │  │  │  ├─ 📄UploadedFileFactory.php
│  │  │  │  │  └─ 📄UriFactory.php
│  │  │  │  ├─ 📁Interfaces
│  │  │  │  │  └─ 📄HeadersInterface.php
│  │  │  │  ├─ 📄Cookies.php
│  │  │  │  ├─ 📄Environment.php
│  │  │  │  ├─ 📄Header.php
│  │  │  │  ├─ 📄Headers.php
│  │  │  │  ├─ 📄Message.php
│  │  │  │  ├─ 📄NonBufferedBody.php
│  │  │  │  ├─ 📄Request.php
│  │  │  │  ├─ 📄Response.php
│  │  │  │  ├─ 📄Stream.php
│  │  │  │  ├─ 📄UploadedFile.php
│  │  │  │  └─ 📄Uri.php
│  │  │  ├─ 📁tests
│  │  │  │  ├─ 📁Assets
│  │  │  │  │  └─ 📄HeaderStack.php
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactoryTest.php
│  │  │  │  │  ├─ 📄ResponseFactoryTest.php
│  │  │  │  │  ├─ 📄ServerRequestFactoryTest.php
│  │  │  │  │  ├─ 📄StreamFactoryTest.php
│  │  │  │  │  ├─ 📄UploadedFileFactoryTest.php
│  │  │  │  │  └─ 📄UriFactoryTest.php
│  │  │  │  ├─ 📁Integration
│  │  │  │  │  ├─ 📄BaseTestFactories.php
│  │  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  │  ├─ 📄ServerRequestTest.php
│  │  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  │  └─ 📄UriTest.php
│  │  │  │  ├─ 📁Mocks
│  │  │  │  │  └─ 📄MessageStub.php
│  │  │  │  ├─ 📄BodyTest.php
│  │  │  │  ├─ 📄bootstrap.php
│  │  │  │  ├─ 📄CookiesTest.php
│  │  │  │  ├─ 📄EnvironmentTest.php
│  │  │  │  ├─ 📄HeadersTest.php
│  │  │  │  ├─ 📄HeaderTest.php
│  │  │  │  ├─ 📄MessageTest.php
│  │  │  │  ├─ 📄NonBufferedBodyTest.php
│  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  └─ 📄UriTest.php
│  │  │  ├─ 📄.codeclimate.yml
│  │  │  ├─ 📄.coveralls.yml
│  │  │  ├─ 📄.editorconfig
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄CODE_OF_CONDUCT.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄CONTRIBUTING.md
│  │  │  ├─ 📄LICENSE.md
│  │  │  ├─ 📄MAINTAINERS.md
│  │  │  ├─ 📄phpcs.xml
│  │  │  ├─ 📄phpstan.neon.dist
│  │  │  ├─ 📄phpunit.xml.dist
│  │  │  └─ 📄README.md
│  │  └─ 📁slim
│  │     ├─ 📁.github
│  │     │  ├─ 📁workflows
│  │     │  │  └─ 📄tests.yml
│  │     │  ├─ 📄dependabot.yml
│  │     │  └─ 📄FUNDING.yml
│  │     ├─ 📁Slim
│  │     │  ├─ 📁Error
│  │     │  │  ├─ 📁Renderers
│  │     │  │  │  ├─ 📄HtmlErrorRenderer.php
│  │     │  │  │  ├─ 📄JsonErrorRenderer.php
│  │     │  │  │  ├─ 📄PlainTextErrorRenderer.php
│  │     │  │  │  └─ 📄XmlErrorRenderer.php
│  │     │  │  └─ 📄AbstractErrorRenderer.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpBadRequestException.php
│  │     │  │  ├─ 📄HttpException.php
│  │     │  │  ├─ 📄HttpForbiddenException.php
│  │     │  │  ├─ 📄HttpGoneException.php
│  │     │  │  ├─ 📄HttpInternalServerErrorException.php
│  │     │  │  ├─ 📄HttpMethodNotAllowedException.php
│  │     │  │  ├─ 📄HttpNotFoundException.php
│  │     │  │  ├─ 📄HttpNotImplementedException.php
│  │     │  │  ├─ 📄HttpSpecializedException.php
│  │     │  │  └─ 📄HttpUnauthorizedException.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄GuzzlePsr17Factory.php
│  │     │  │  │  ├─ 📄HttpSoftPsr17Factory.php
│  │     │  │  │  ├─ 📄LaminasDiactorosPsr17Factory.php
│  │     │  │  │  ├─ 📄NyholmPsr17Factory.php
│  │     │  │  │  ├─ 📄Psr17Factory.php
│  │     │  │  │  ├─ 📄Psr17FactoryProvider.php
│  │     │  │  │  ├─ 📄ServerRequestCreator.php
│  │     │  │  │  ├─ 📄SlimHttpPsr17Factory.php
│  │     │  │  │  ├─ 📄SlimHttpServerRequestCreator.php
│  │     │  │  │  └─ 📄SlimPsr17Factory.php
│  │     │  │  ├─ 📄AppFactory.php
│  │     │  │  └─ 📄ServerRequestCreatorFactory.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  ├─ 📄RequestHandler.php
│  │     │  │  │  ├─ 📄RequestResponse.php
│  │     │  │  │  ├─ 📄RequestResponseArgs.php
│  │     │  │  │  └─ 📄RequestResponseNamedArgs.php
│  │     │  │  └─ 📄ErrorHandler.php
│  │     │  ├─ 📁Interfaces
│  │     │  │  ├─ 📄AdvancedCallableResolverInterface.php
│  │     │  │  ├─ 📄CallableResolverInterface.php
│  │     │  │  ├─ 📄DispatcherInterface.php
│  │     │  │  ├─ 📄ErrorHandlerInterface.php
│  │     │  │  ├─ 📄ErrorRendererInterface.php
│  │     │  │  ├─ 📄InvocationStrategyInterface.php
│  │     │  │  ├─ 📄MiddlewareDispatcherInterface.php
│  │     │  │  ├─ 📄Psr17FactoryInterface.php
│  │     │  │  ├─ 📄Psr17FactoryProviderInterface.php
│  │     │  │  ├─ 📄RequestHandlerInvocationStrategyInterface.php
│  │     │  │  ├─ 📄RouteCollectorInterface.php
│  │     │  │  ├─ 📄RouteCollectorProxyInterface.php
│  │     │  │  ├─ 📄RouteGroupInterface.php
│  │     │  │  ├─ 📄RouteInterface.php
│  │     │  │  ├─ 📄RouteParserInterface.php
│  │     │  │  ├─ 📄RouteResolverInterface.php
│  │     │  │  └─ 📄ServerRequestCreatorInterface.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddleware.php
│  │     │  │  ├─ 📄ContentLengthMiddleware.php
│  │     │  │  ├─ 📄ErrorMiddleware.php
│  │     │  │  ├─ 📄MethodOverrideMiddleware.php
│  │     │  │  ├─ 📄OutputBufferingMiddleware.php
│  │     │  │  └─ 📄RoutingMiddleware.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄Dispatcher.php
│  │     │  │  ├─ 📄FastRouteDispatcher.php
│  │     │  │  ├─ 📄Route.php
│  │     │  │  ├─ 📄RouteCollector.php
│  │     │  │  ├─ 📄RouteCollectorProxy.php
│  │     │  │  ├─ 📄RouteContext.php
│  │     │  │  ├─ 📄RouteGroup.php
│  │     │  │  ├─ 📄RouteParser.php
│  │     │  │  ├─ 📄RouteResolver.php
│  │     │  │  ├─ 📄RouteRunner.php
│  │     │  │  └─ 📄RoutingResults.php
│  │     │  ├─ 📄App.php
│  │     │  ├─ 📄CallableResolver.php
│  │     │  ├─ 📄Logger.php
│  │     │  ├─ 📄MiddlewareDispatcher.php
│  │     │  └─ 📄ResponseEmitter.php
│  │     ├─ 📁tests
│  │     │  ├─ 📁Assets
│  │     │  │  └─ 📄HeaderStack.php
│  │     │  ├─ 📁Error
│  │     │  │  └─ 📄AbstractErrorRendererTest.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpExceptionTest.php
│  │     │  │  └─ 📄HttpUnauthorizedExceptionTest.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄Psr17FactoryProviderTest.php
│  │     │  │  │  ├─ 📄Psr17FactoryTest.php
│  │     │  │  │  └─ 📄SlimHttpServerRequestCreatorTest.php
│  │     │  │  ├─ 📄AppFactoryTest.php
│  │     │  │  └─ 📄ServerRequestCreatorFactoryTest.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  └─ 📄RequestResponseNamedArgsTest.php
│  │     │  │  └─ 📄ErrorHandlerTest.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddlewareTest.php
│  │     │  │  ├─ 📄ContentLengthMiddlewareTest.php
│  │     │  │  ├─ 📄ErrorMiddlewareTest.php
│  │     │  │  ├─ 📄MethodOverrideMiddlewareTest.php
│  │     │  │  ├─ 📄OutputBufferingMiddlewareTest.php
│  │     │  │  └─ 📄RoutingMiddlewareTest.php
│  │     │  ├─ 📁Mocks
│  │     │  │  ├─ 📄CallableTest.php
│  │     │  │  ├─ 📄InvocationStrategyTest.php
│  │     │  │  ├─ 📄InvokableTest.php
│  │     │  │  ├─ 📄MiddlewareTest.php
│  │     │  │  ├─ 📄MockAction.php
│  │     │  │  ├─ 📄MockCustomException.php
│  │     │  │  ├─ 📄MockCustomRequestHandlerInvocationStrategy.php
│  │     │  │  ├─ 📄MockMiddlewareSlimCallable.php
│  │     │  │  ├─ 📄MockMiddlewareWithConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutInterface.php
│  │     │  │  ├─ 📄MockPsr17Factory.php
│  │     │  │  ├─ 📄MockPsr17FactoryWithoutStreamFactory.php
│  │     │  │  ├─ 📄MockRequestHandler.php
│  │     │  │  ├─ 📄MockSequenceMiddleware.php
│  │     │  │  ├─ 📄MockStream.php
│  │     │  │  ├─ 📄RequestHandlerTest.php
│  │     │  │  ├─ 📄SlowPokeStream.php
│  │     │  │  └─ 📄SmallChunksStream.php
│  │     │  ├─ 📁Providers
│  │     │  │  ├─ 📄PSR7ObjectProvider.php
│  │     │  │  └─ 📄PSR7ObjectProviderInterface.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄FastRouteDispatcherTest.php
│  │     │  │  ├─ 📄RouteCollectorProxyTest.php
│  │     │  │  ├─ 📄RouteCollectorTest.php
│  │     │  │  ├─ 📄RouteContextTest.php
│  │     │  │  ├─ 📄RouteParserTest.php
│  │     │  │  ├─ 📄RouteResolverTest.php
│  │     │  │  ├─ 📄RouteRunnerTest.php
│  │     │  │  └─ 📄RouteTest.php
│  │     │  ├─ 📄AppTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄CallableResolverTest.php
│  │     │  ├─ 📄MiddlewareDispatcherTest.php
│  │     │  ├─ 📄ResponseEmitterTest.php
│  │     │  └─ 📄TestCase.php
│  │     ├─ 📄.coveralls.yml
│  │     ├─ 📄.editorconfig
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄CODE_OF_CONDUCT.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄CONTRIBUTING.md
│  │     ├─ 📄LICENSE.md
│  │     ├─ 📄MAINTAINERS.md
│  │     ├─ 📄phpcs.xml.dist
│  │     ├─ 📄phpstan.neon.dist
│  │     ├─ 📄phpunit.xml.dist
│  │     ├─ 📄README.md
│  │     ├─ 📄SECURITY.md
│  │     └─ 📄UPGRADING.md
│  ├─ 📁symfony
│  │  └─ 📁polyfill-php80
│  │     ├─ 📁Resources
│  │     │  └─ 📁stubs
│  │     │     ├─ 📄Attribute.php
│  │     │     ├─ 📄PhpToken.php
│  │     │     ├─ 📄Stringable.php
│  │     │     ├─ 📄UnhandledMatchError.php
│  │     │     └─ 📄ValueError.php
│  │     ├─ 📄bootstrap.php
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄Php80.php
│  │     ├─ 📄PhpToken.php
│  │     └─ 📄README.md
│  └─ 📄autoload.php
├─ 📄asistencias.php
├─ 📄composer.json
├─ 📄composer.lock
├─ 📄conectar_dispositivo.php
├─ 📄config.php
├─ 📄crearUser.php
├─ 📄eliminarUser.php
├─ 📄example.php
├─ 📄obtenerUser.php
├─ 📄procesar_formulario.php
├─ 📄README.md
└─ 📄ZK-APIREST.rar
```
```
ZK-APIREST
├─ 📁app
│  └─ 📁src
│     ├─ 📁controllers
│     │  ├─ 📄AsistenciasC.php
│     │  └─ 📄UsuariosC.php
│     └─ 📁routes
│        ├─ 📄AsistenciasR.php
│        └─ 📄UsuariosR.php
├─ 📁public
│  ├─ 📄.htaccess
│  └─ 📄index.php
├─ 📁templates
│  └─ 📄example.html
├─ 📁tests
├─ 📁vendor
│  ├─ 📁composer
│  │  ├─ 📄autoload_classmap.php
│  │  ├─ 📄autoload_files.php
│  │  ├─ 📄autoload_namespaces.php
│  │  ├─ 📄autoload_psr4.php
│  │  ├─ 📄autoload_real.php
│  │  ├─ 📄autoload_static.php
│  │  ├─ 📄ClassLoader.php
│  │  ├─ 📄installed.json
│  │  ├─ 📄installed.php
│  │  ├─ 📄InstalledVersions.php
│  │  ├─ 📄LICENSE
│  │  └─ 📄platform_check.php
│  ├─ 📁fig
│  │  └─ 📁http-message-util
│  │     ├─ 📁src
│  │     │  ├─ 📄RequestMethodInterface.php
│  │     │  └─ 📄StatusCodeInterface.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁lib
│  │  └─ 📁zklib
│  │     ├─ 📁docs
│  │     │  └─ 📄ZK_Communication_protocol_manual_CMD.pdf
│  │     ├─ 📁logs
│  │     │  └─ 📄.gitignore
│  │     ├─ 📁src
│  │     │  ├─ 📄Attendance.php
│  │     │  ├─ 📄Connect.php
│  │     │  ├─ 📄Device.php
│  │     │  ├─ 📄Face.php
│  │     │  ├─ 📄Fingerprint.php
│  │     │  ├─ 📄Os.php
│  │     │  ├─ 📄Pin.php
│  │     │  ├─ 📄Platform.php
│  │     │  ├─ 📄SerialNumber.php
│  │     │  ├─ 📄Ssr.php
│  │     │  ├─ 📄Time.php
│  │     │  ├─ 📄User.php
│  │     │  ├─ 📄Util.php
│  │     │  ├─ 📄Version.php
│  │     │  └─ 📄WorkCode.php
│  │     ├─ 📁vendor
│  │     │  ├─ 📁composer
│  │     │  │  ├─ 📄autoload_classmap.php
│  │     │  │  ├─ 📄autoload_namespaces.php
│  │     │  │  ├─ 📄autoload_psr4.php
│  │     │  │  ├─ 📄autoload_real.php
│  │     │  │  └─ 📄ClassLoader.php
│  │     │  └─ 📄autoload.php
│  │     └─ 📄ZKLib.php
│  ├─ 📁nikic
│  │  └─ 📁fast-route
│  │     ├─ 📁src
│  │     │  ├─ 📁DataGenerator
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBased.php
│  │     │  │  ├─ 📄GroupCountBased.php
│  │     │  │  ├─ 📄GroupPosBased.php
│  │     │  │  ├─ 📄MarkBased.php
│  │     │  │  └─ 📄RegexBasedAbstract.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄Std.php
│  │     │  ├─ 📄BadRouteException.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄DataGenerator.php
│  │     │  ├─ 📄Dispatcher.php
│  │     │  ├─ 📄functions.php
│  │     │  ├─ 📄Route.php
│  │     │  ├─ 📄RouteCollector.php
│  │     │  └─ 📄RouteParser.php
│  │     ├─ 📁test
│  │     │  ├─ 📁Dispatcher
│  │     │  │  ├─ 📄CharCountBasedTest.php
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄GroupCountBasedTest.php
│  │     │  │  ├─ 📄GroupPosBasedTest.php
│  │     │  │  └─ 📄MarkBasedTest.php
│  │     │  ├─ 📁HackTypechecker
│  │     │  │  ├─ 📁fixtures
│  │     │  │  │  ├─ 📄all_options.php
│  │     │  │  │  ├─ 📄empty_options.php
│  │     │  │  │  └─ 📄no_options.php
│  │     │  │  └─ 📄HackTypecheckerTest.php
│  │     │  ├─ 📁RouteParser
│  │     │  │  └─ 📄StdTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  └─ 📄RouteCollectorTest.php
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.hhconfig
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄FastRoute.hhi
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     ├─ 📄psalm.xml
│  │     └─ 📄README.md
│  ├─ 📁psr
│  │  ├─ 📁container
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄ContainerExceptionInterface.php
│  │  │  │  ├─ 📄ContainerInterface.php
│  │  │  │  └─ 📄NotFoundExceptionInterface.php
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-factory
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄RequestFactoryInterface.php
│  │  │  │  ├─ 📄ResponseFactoryInterface.php
│  │  │  │  ├─ 📄ServerRequestFactoryInterface.php
│  │  │  │  ├─ 📄StreamFactoryInterface.php
│  │  │  │  ├─ 📄UploadedFileFactoryInterface.php
│  │  │  │  └─ 📄UriFactoryInterface.php
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄.pullapprove.yml
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-message
│  │  │  ├─ 📁docs
│  │  │  │  ├─ 📄PSR7-Interfaces.md
│  │  │  │  └─ 📄PSR7-Usage.md
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📄MessageInterface.php
│  │  │  │  ├─ 📄RequestInterface.php
│  │  │  │  ├─ 📄ResponseInterface.php
│  │  │  │  ├─ 📄ServerRequestInterface.php
│  │  │  │  ├─ 📄StreamInterface.php
│  │  │  │  ├─ 📄UploadedFileInterface.php
│  │  │  │  └─ 📄UriInterface.php
│  │  │  ├─ 📄CHANGELOG.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-handler
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄RequestHandlerInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  ├─ 📁http-server-middleware
│  │  │  ├─ 📁src
│  │  │  │  └─ 📄MiddlewareInterface.php
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄LICENSE
│  │  │  └─ 📄README.md
│  │  └─ 📁log
│  │     ├─ 📁src
│  │     │  ├─ 📄AbstractLogger.php
│  │     │  ├─ 📄InvalidArgumentException.php
│  │     │  ├─ 📄LoggerAwareInterface.php
│  │     │  ├─ 📄LoggerAwareTrait.php
│  │     │  ├─ 📄LoggerInterface.php
│  │     │  ├─ 📄LoggerTrait.php
│  │     │  ├─ 📄LogLevel.php
│  │     │  └─ 📄NullLogger.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     └─ 📄README.md
│  ├─ 📁ralouphie
│  │  └─ 📁getallheaders
│  │     ├─ 📁src
│  │     │  └─ 📄getallheaders.php
│  │     ├─ 📁tests
│  │     │  └─ 📄GetAllHeadersTest.php
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄.travis.yml
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄phpunit.xml
│  │     └─ 📄README.md
│  ├─ 📁slim
│  │  ├─ 📁psr7
│  │  │  ├─ 📁.github
│  │  │  │  ├─ 📁workflows
│  │  │  │  │  └─ 📄tests.yml
│  │  │  │  └─ 📄dependabot.yml
│  │  │  ├─ 📁src
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactory.php
│  │  │  │  │  ├─ 📄ResponseFactory.php
│  │  │  │  │  ├─ 📄ServerRequestFactory.php
│  │  │  │  │  ├─ 📄StreamFactory.php
│  │  │  │  │  ├─ 📄UploadedFileFactory.php
│  │  │  │  │  └─ 📄UriFactory.php
│  │  │  │  ├─ 📁Interfaces
│  │  │  │  │  └─ 📄HeadersInterface.php
│  │  │  │  ├─ 📄Cookies.php
│  │  │  │  ├─ 📄Environment.php
│  │  │  │  ├─ 📄Header.php
│  │  │  │  ├─ 📄Headers.php
│  │  │  │  ├─ 📄Message.php
│  │  │  │  ├─ 📄NonBufferedBody.php
│  │  │  │  ├─ 📄Request.php
│  │  │  │  ├─ 📄Response.php
│  │  │  │  ├─ 📄Stream.php
│  │  │  │  ├─ 📄UploadedFile.php
│  │  │  │  └─ 📄Uri.php
│  │  │  ├─ 📁tests
│  │  │  │  ├─ 📁Assets
│  │  │  │  │  └─ 📄HeaderStack.php
│  │  │  │  ├─ 📁Factory
│  │  │  │  │  ├─ 📄RequestFactoryTest.php
│  │  │  │  │  ├─ 📄ResponseFactoryTest.php
│  │  │  │  │  ├─ 📄ServerRequestFactoryTest.php
│  │  │  │  │  ├─ 📄StreamFactoryTest.php
│  │  │  │  │  ├─ 📄UploadedFileFactoryTest.php
│  │  │  │  │  └─ 📄UriFactoryTest.php
│  │  │  │  ├─ 📁Integration
│  │  │  │  │  ├─ 📄BaseTestFactories.php
│  │  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  │  ├─ 📄ServerRequestTest.php
│  │  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  │  └─ 📄UriTest.php
│  │  │  │  ├─ 📁Mocks
│  │  │  │  │  └─ 📄MessageStub.php
│  │  │  │  ├─ 📄BodyTest.php
│  │  │  │  ├─ 📄bootstrap.php
│  │  │  │  ├─ 📄CookiesTest.php
│  │  │  │  ├─ 📄EnvironmentTest.php
│  │  │  │  ├─ 📄HeadersTest.php
│  │  │  │  ├─ 📄HeaderTest.php
│  │  │  │  ├─ 📄MessageTest.php
│  │  │  │  ├─ 📄NonBufferedBodyTest.php
│  │  │  │  ├─ 📄RequestTest.php
│  │  │  │  ├─ 📄ResponseTest.php
│  │  │  │  ├─ 📄StreamTest.php
│  │  │  │  ├─ 📄UploadedFileTest.php
│  │  │  │  └─ 📄UriTest.php
│  │  │  ├─ 📄.codeclimate.yml
│  │  │  ├─ 📄.coveralls.yml
│  │  │  ├─ 📄.editorconfig
│  │  │  ├─ 📄.gitattributes
│  │  │  ├─ 📄.gitignore
│  │  │  ├─ 📄CODE_OF_CONDUCT.md
│  │  │  ├─ 📄composer.json
│  │  │  ├─ 📄CONTRIBUTING.md
│  │  │  ├─ 📄LICENSE.md
│  │  │  ├─ 📄MAINTAINERS.md
│  │  │  ├─ 📄phpcs.xml
│  │  │  ├─ 📄phpstan.neon.dist
│  │  │  ├─ 📄phpunit.xml.dist
│  │  │  └─ 📄README.md
│  │  └─ 📁slim
│  │     ├─ 📁.github
│  │     │  ├─ 📁workflows
│  │     │  │  └─ 📄tests.yml
│  │     │  ├─ 📄dependabot.yml
│  │     │  └─ 📄FUNDING.yml
│  │     ├─ 📁Slim
│  │     │  ├─ 📁Error
│  │     │  │  ├─ 📁Renderers
│  │     │  │  │  ├─ 📄HtmlErrorRenderer.php
│  │     │  │  │  ├─ 📄JsonErrorRenderer.php
│  │     │  │  │  ├─ 📄PlainTextErrorRenderer.php
│  │     │  │  │  └─ 📄XmlErrorRenderer.php
│  │     │  │  └─ 📄AbstractErrorRenderer.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpBadRequestException.php
│  │     │  │  ├─ 📄HttpException.php
│  │     │  │  ├─ 📄HttpForbiddenException.php
│  │     │  │  ├─ 📄HttpGoneException.php
│  │     │  │  ├─ 📄HttpInternalServerErrorException.php
│  │     │  │  ├─ 📄HttpMethodNotAllowedException.php
│  │     │  │  ├─ 📄HttpNotFoundException.php
│  │     │  │  ├─ 📄HttpNotImplementedException.php
│  │     │  │  ├─ 📄HttpSpecializedException.php
│  │     │  │  └─ 📄HttpUnauthorizedException.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄GuzzlePsr17Factory.php
│  │     │  │  │  ├─ 📄HttpSoftPsr17Factory.php
│  │     │  │  │  ├─ 📄LaminasDiactorosPsr17Factory.php
│  │     │  │  │  ├─ 📄NyholmPsr17Factory.php
│  │     │  │  │  ├─ 📄Psr17Factory.php
│  │     │  │  │  ├─ 📄Psr17FactoryProvider.php
│  │     │  │  │  ├─ 📄ServerRequestCreator.php
│  │     │  │  │  ├─ 📄SlimHttpPsr17Factory.php
│  │     │  │  │  ├─ 📄SlimHttpServerRequestCreator.php
│  │     │  │  │  └─ 📄SlimPsr17Factory.php
│  │     │  │  ├─ 📄AppFactory.php
│  │     │  │  └─ 📄ServerRequestCreatorFactory.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  ├─ 📄RequestHandler.php
│  │     │  │  │  ├─ 📄RequestResponse.php
│  │     │  │  │  ├─ 📄RequestResponseArgs.php
│  │     │  │  │  └─ 📄RequestResponseNamedArgs.php
│  │     │  │  └─ 📄ErrorHandler.php
│  │     │  ├─ 📁Interfaces
│  │     │  │  ├─ 📄AdvancedCallableResolverInterface.php
│  │     │  │  ├─ 📄CallableResolverInterface.php
│  │     │  │  ├─ 📄DispatcherInterface.php
│  │     │  │  ├─ 📄ErrorHandlerInterface.php
│  │     │  │  ├─ 📄ErrorRendererInterface.php
│  │     │  │  ├─ 📄InvocationStrategyInterface.php
│  │     │  │  ├─ 📄MiddlewareDispatcherInterface.php
│  │     │  │  ├─ 📄Psr17FactoryInterface.php
│  │     │  │  ├─ 📄Psr17FactoryProviderInterface.php
│  │     │  │  ├─ 📄RequestHandlerInvocationStrategyInterface.php
│  │     │  │  ├─ 📄RouteCollectorInterface.php
│  │     │  │  ├─ 📄RouteCollectorProxyInterface.php
│  │     │  │  ├─ 📄RouteGroupInterface.php
│  │     │  │  ├─ 📄RouteInterface.php
│  │     │  │  ├─ 📄RouteParserInterface.php
│  │     │  │  ├─ 📄RouteResolverInterface.php
│  │     │  │  └─ 📄ServerRequestCreatorInterface.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddleware.php
│  │     │  │  ├─ 📄ContentLengthMiddleware.php
│  │     │  │  ├─ 📄ErrorMiddleware.php
│  │     │  │  ├─ 📄MethodOverrideMiddleware.php
│  │     │  │  ├─ 📄OutputBufferingMiddleware.php
│  │     │  │  └─ 📄RoutingMiddleware.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄Dispatcher.php
│  │     │  │  ├─ 📄FastRouteDispatcher.php
│  │     │  │  ├─ 📄Route.php
│  │     │  │  ├─ 📄RouteCollector.php
│  │     │  │  ├─ 📄RouteCollectorProxy.php
│  │     │  │  ├─ 📄RouteContext.php
│  │     │  │  ├─ 📄RouteGroup.php
│  │     │  │  ├─ 📄RouteParser.php
│  │     │  │  ├─ 📄RouteResolver.php
│  │     │  │  ├─ 📄RouteRunner.php
│  │     │  │  └─ 📄RoutingResults.php
│  │     │  ├─ 📄App.php
│  │     │  ├─ 📄CallableResolver.php
│  │     │  ├─ 📄Logger.php
│  │     │  ├─ 📄MiddlewareDispatcher.php
│  │     │  └─ 📄ResponseEmitter.php
│  │     ├─ 📁tests
│  │     │  ├─ 📁Assets
│  │     │  │  └─ 📄HeaderStack.php
│  │     │  ├─ 📁Error
│  │     │  │  └─ 📄AbstractErrorRendererTest.php
│  │     │  ├─ 📁Exception
│  │     │  │  ├─ 📄HttpExceptionTest.php
│  │     │  │  └─ 📄HttpUnauthorizedExceptionTest.php
│  │     │  ├─ 📁Factory
│  │     │  │  ├─ 📁Psr17
│  │     │  │  │  ├─ 📄Psr17FactoryProviderTest.php
│  │     │  │  │  ├─ 📄Psr17FactoryTest.php
│  │     │  │  │  └─ 📄SlimHttpServerRequestCreatorTest.php
│  │     │  │  ├─ 📄AppFactoryTest.php
│  │     │  │  └─ 📄ServerRequestCreatorFactoryTest.php
│  │     │  ├─ 📁Handlers
│  │     │  │  ├─ 📁Strategies
│  │     │  │  │  └─ 📄RequestResponseNamedArgsTest.php
│  │     │  │  └─ 📄ErrorHandlerTest.php
│  │     │  ├─ 📁Middleware
│  │     │  │  ├─ 📄BodyParsingMiddlewareTest.php
│  │     │  │  ├─ 📄ContentLengthMiddlewareTest.php
│  │     │  │  ├─ 📄ErrorMiddlewareTest.php
│  │     │  │  ├─ 📄MethodOverrideMiddlewareTest.php
│  │     │  │  ├─ 📄OutputBufferingMiddlewareTest.php
│  │     │  │  └─ 📄RoutingMiddlewareTest.php
│  │     │  ├─ 📁Mocks
│  │     │  │  ├─ 📄CallableTest.php
│  │     │  │  ├─ 📄InvocationStrategyTest.php
│  │     │  │  ├─ 📄InvokableTest.php
│  │     │  │  ├─ 📄MiddlewareTest.php
│  │     │  │  ├─ 📄MockAction.php
│  │     │  │  ├─ 📄MockCustomException.php
│  │     │  │  ├─ 📄MockCustomRequestHandlerInvocationStrategy.php
│  │     │  │  ├─ 📄MockMiddlewareSlimCallable.php
│  │     │  │  ├─ 📄MockMiddlewareWithConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutConstructor.php
│  │     │  │  ├─ 📄MockMiddlewareWithoutInterface.php
│  │     │  │  ├─ 📄MockPsr17Factory.php
│  │     │  │  ├─ 📄MockPsr17FactoryWithoutStreamFactory.php
│  │     │  │  ├─ 📄MockRequestHandler.php
│  │     │  │  ├─ 📄MockSequenceMiddleware.php
│  │     │  │  ├─ 📄MockStream.php
│  │     │  │  ├─ 📄RequestHandlerTest.php
│  │     │  │  ├─ 📄SlowPokeStream.php
│  │     │  │  └─ 📄SmallChunksStream.php
│  │     │  ├─ 📁Providers
│  │     │  │  ├─ 📄PSR7ObjectProvider.php
│  │     │  │  └─ 📄PSR7ObjectProviderInterface.php
│  │     │  ├─ 📁Routing
│  │     │  │  ├─ 📄DispatcherTest.php
│  │     │  │  ├─ 📄FastRouteDispatcherTest.php
│  │     │  │  ├─ 📄RouteCollectorProxyTest.php
│  │     │  │  ├─ 📄RouteCollectorTest.php
│  │     │  │  ├─ 📄RouteContextTest.php
│  │     │  │  ├─ 📄RouteParserTest.php
│  │     │  │  ├─ 📄RouteResolverTest.php
│  │     │  │  ├─ 📄RouteRunnerTest.php
│  │     │  │  └─ 📄RouteTest.php
│  │     │  ├─ 📄AppTest.php
│  │     │  ├─ 📄bootstrap.php
│  │     │  ├─ 📄CallableResolverTest.php
│  │     │  ├─ 📄MiddlewareDispatcherTest.php
│  │     │  ├─ 📄ResponseEmitterTest.php
│  │     │  └─ 📄TestCase.php
│  │     ├─ 📄.coveralls.yml
│  │     ├─ 📄.editorconfig
│  │     ├─ 📄.gitattributes
│  │     ├─ 📄.gitignore
│  │     ├─ 📄CHANGELOG.md
│  │     ├─ 📄CODE_OF_CONDUCT.md
│  │     ├─ 📄composer.json
│  │     ├─ 📄CONTRIBUTING.md
│  │     ├─ 📄LICENSE.md
│  │     ├─ 📄MAINTAINERS.md
│  │     ├─ 📄phpcs.xml.dist
│  │     ├─ 📄phpstan.neon.dist
│  │     ├─ 📄phpunit.xml.dist
│  │     ├─ 📄README.md
│  │     ├─ 📄SECURITY.md
│  │     └─ 📄UPGRADING.md
│  ├─ 📁symfony
│  │  └─ 📁polyfill-php80
│  │     ├─ 📁Resources
│  │     │  └─ 📁stubs
│  │     │     ├─ 📄Attribute.php
│  │     │     ├─ 📄PhpToken.php
│  │     │     ├─ 📄Stringable.php
│  │     │     ├─ 📄UnhandledMatchError.php
│  │     │     └─ 📄ValueError.php
│  │     ├─ 📄bootstrap.php
│  │     ├─ 📄composer.json
│  │     ├─ 📄LICENSE
│  │     ├─ 📄Php80.php
│  │     ├─ 📄PhpToken.php
│  │     └─ 📄README.md
│  └─ 📄autoload.php
├─ 📄asistencias.php
├─ 📄composer.json
├─ 📄composer.lock
├─ 📄conectar_dispositivo.php
├─ 📄config.php
├─ 📄crearUser.php
├─ 📄eliminarUser.php
├─ 📄example.php
├─ 📄obtenerUser.php
├─ 📄procesar_formulario.php
├─ 📄README.md
└─ 📄ZK-APIREST.rar
```