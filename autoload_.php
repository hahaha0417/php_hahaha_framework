<?php

namespace hahaha;

class hahaha_loader
{
	public static $hahaha_dir = NULL;

	public static $loader = NULL;

	public static $hahaha = [];

	public static $autoload_files = [];

	function __construct()
	{
	}

	public static function Class_Mapping()
	{
		self::$hahaha = [
			"hahaha" => [
				"api" => [
					"facebook" => [
						"bot" => [
							"_Items" => [
								"hahaha_controller" => 'app/http/api/v1.0/facebook/bot/hahaha/hahaha_controller.php',
							],
						],
						"_Items" => [
						],
					],
					"line" => [
						"bot" => [
							"common" => [
								"_Items" => [
									"hahaha_controller" => 'app/http/api/v1.0/line/bot/common/hahaha_controller.php',
								],
							],
							"hahaha" => [
								"_Items" => [
									"hahaha_controller" => 'app/http/api/v1.0/line/bot/hahaha/hahaha_controller.php',
								],
							],
							"_Items" => [
							],
						],
						"_Items" => [
						],
					],
					"_Items" => [
					],
				],
				"controller" => [
					"backend" => [
						"_Items" => [
							"base_controller" => 'app/http/controllers/base/base_controller_backend.php',
						],
					],
					"front" => [
						"_Items" => [
							"base_controller" => 'app/http/controllers/base/base_controller_front.php',
							"index_controller" => 'app/http/controllers/front/index_controller.php',
						],
					],
					"_Items" => [
					],
				],
				"middleware" => [
					"_Items" => [
						"hahaha_middleware_api" => 'app/http/middleware/middleware/hahaha_middleware_api.php',
						"hahaha_middleware_web" => 'app/http/middleware/middleware/hahaha_middleware_web.php',
						"hahaha_middleware_web_backend" => 'app/http/middleware/middleware/web/hahaha_middleware_web_backend.php',
						"hahaha_middleware_web_front" => 'app/http/middleware/middleware/web/hahaha_middleware_web_front.php',
						"hahaha_middleware_base" => 'framework/hahaha/base/middleware/hahaha_middleware_base.php',
					],
				],
				"view" => [
					"front" => [
						"_Items" => [
							"index_view_sample" => 'app/http/views/index_view_sample.php',
						],
					],
					"module" => [
						"front" => [
							"_Items" => [
								"common_home_main_home_view" => 'app/http/views/module/front/common/home/main_home/main_home.php',
								"common_nav_main_nav_view" => 'app/http/views/module/front/common/nav/main_nav.php',
								"common_tail_main_tail_view" => 'app/http/views/module/front/common/tail/main_tail.php',
								"index_index_control" => 'app/http/views/module/front/index/index_control.php',
							],
						],
						"integrate" => [
							"_Items" => [
								"control_main_control" => 'app/http/views/module/integrate/control/main_control/main_control.php',
							],
						],
						"_Items" => [
						],
					],
					"web" => [
						"common" => [
							"_Items" => [
								"main_view" => 'app/http/views/web/common/main_view.php',
								"sub_view" => 'app/http/views/web/common/sub_view.php',
							],
						],
						"front" => [
							"_Items" => [
								"main_home_feature_view" => 'app/http/views/web/front/common/home/main_home/main_home_feature.php',
								"main_home_overview_view" => 'app/http/views/web/front/common/home/main_home/main_home_overview.php',
								"index_view" => 'app/http/views/web/front/index_view.php',
							],
						],
						"_Items" => [
						],
					],
					"_Items" => [
					],
				],
				"asset" => [
					"normal" => [
						"set" => [
							"_Items" => [
								"hahaha_asset_class" => 'resources/assets/normal/hahaha_asset/hahaha_asset_class.php',
								"hahaha_asset_class2" => 'resources/assets/normal/hahaha_asset/hahaha_asset_class2.php',
							],
						],
						"_Items" => [
							"hahaha_asset" => 'resources/assets/normal/hahaha_asset.php',
						],
					],
					"_Items" => [
						"hahaha_asset_base" => 'framework/hahaha/base/asset/hahaha_asset_base.php',
					],
				],
				"language" => [
					"en" => [
						"_Items" => [
							"hahaha_language" => 'resources/languages/en/hahaha_language.php',
						],
					],
					"tw" => [
						"set" => [
							"_Items" => [
								"hahaha_language_class" => 'resources/languages/tw/hahaha_language/hahaha_language_class.php',
								"hahaha_language_class2" => 'resources/languages/tw/hahaha_language/hahaha_language_class2.php',
							],
						],
						"_Items" => [
							"hahaha_language" => 'resources/languages/tw/hahaha_language.php',
						],
					],
					"_Items" => [
						"hahaha_language_base" => 'framework/hahaha/base/language/hahaha_language_base.php',
					],
				],
				"_Items" => [
					"hahaha_application" => 'app/hahaha_application.php',
					"hahaha_monitor" => 'app/hahaha_monitor.php',
					"hahaha_middleware" => 'app/http/middleware/hahaha_middleware.php',
					"hahaha_route" => 'app/http/routes/hahaha_route.php',
					"hahaha_asset" => 'app/resources/assets/hahaha_asset.php',
					"hahaha_language" => 'app/resources/languages/hahaha_language.php',
					"hahaha_loader" => 'autoload_.php',
					"hahaha_bootstrap" => 'bootstrap/hahaha_bootstrap.php',
					"hahaha_bootstrap_abc" => 'bootstrap/hahaha_bootstrap_abc.php',
					"hahaha_global" => 'config/global/hahaha_global.php',
					"hahaha_global_default" => 'config/global/hahaha_global_default.php',
					"hahaha_global_local" => 'config/global/hahaha_global_local.php',
					"hahaha_option" => 'config/option/hahaha_option.php',
					"hahaha_option_default" => 'config/option/hahaha_option_default.php',
					"hahaha_option_local" => 'config/option/hahaha_option_local.php',
					"hahaha_system_setting" => 'config/system_setting/hahaha_system_setting.php',
					"hahaha_system_setting_default" => 'config/system_setting/hahaha_system_setting_default.php',
					"hahaha_system_setting_local" => 'config/system_setting/hahaha_system_setting_local.php',
					"hahaha_flow" => 'flow/hahaha_flow.php',
					"hahaha_flow_time" => 'flow/hahaha_flow_time.php',
					"hahaha_application_base" => 'framework/hahaha/base/hahaha_application_base.php',
					"hahaha_asset_base" => 'framework/hahaha/base/hahaha_asset_base.php',
					"hahaha_bootstrap_base" => 'framework/hahaha/base/hahaha_bootstrap_base.php',
					"hahaha_controller_base" => 'framework/hahaha/base/hahaha_controller_base.php',
					"hahaha_flow_base" => 'framework/hahaha/base/hahaha_flow_base.php',
					"hahaha_language_base" => 'framework/hahaha/base/hahaha_language_base.php',
					"hahaha_middleware_base" => 'framework/hahaha/base/hahaha_middleware_base.php',
					"hahaha_model_base" => 'framework/hahaha/base/hahaha_model_base.php',
					"hahaha_route_base" => 'framework/hahaha/base/hahaha_route_base.php',
					"hahaha_view_base" => 'framework/hahaha/base/hahaha_view_base.php',
					"hahaha_instance_trait" => 'framework/hahaha/trait/hahaha_instance_trait.php',
					"hahaha_menu" => 'table/hahaha_menu.php',
					"hahaha_parameter" => 'table/hahaha_parameter.php',
				],
			],
			"front" => [
				"index" => [
					"_Items" => [
						"A_Index" => 'app/http/models/front/index/A_Index.php',
						"A_Item" => 'app/http/models/front/index/A_Item.php',
						"A_Temp" => 'app/http/models/front/index/A_Temp.php',
					],
				],
				"_Items" => [
				],
			],
			"framework" => [
				"_Items" => [
					"framework_loader" => 'framework/autoload_.php',
				],
			],
			"ha" => [
				"_Items" => [
					"App" => 'framework/hahaha/ha/App.php',
					"Application" => 'framework/hahaha/ha/Appication.php',
					"Asset" => 'framework/hahaha/ha/Asset.php',
					"Bootstrap" => 'framework/hahaha/ha/Bootstrap.php',
					"Cache" => 'framework/hahaha/ha/Cache.php',
					"_Global" => 'framework/hahaha/ha/config/Global.php',
					"Option" => 'framework/hahaha/ha/config/Option.php',
					"System_Setting" => 'framework/hahaha/ha/config/System_Setting.php',
					"Email" => 'framework/hahaha/ha/Email.php',
					"Arg" => 'framework/hahaha/ha/external/Arg.php',
					"Cookie" => 'framework/hahaha/ha/external/Cookie.php',
					"Files" => 'framework/hahaha/ha/external/Files.php',
					"Get" => 'framework/hahaha/ha/external/Get.php',
					"Globals" => 'framework/hahaha/ha/external/Globals.php',
					"Post" => 'framework/hahaha/ha/external/Post.php',
					"Server" => 'framework/hahaha/ha/external/Server.php',
					"Session" => 'framework/hahaha/ha/external/Session.php',
					"Lang" => 'framework/hahaha/ha/Lang.php',
					"Log" => 'framework/hahaha/ha/Log.php',
					"Route" => 'framework/hahaha/ha/Route.php',
					"Menu" => 'framework/hahaha/ha/table/Menu.php',
					"Parameter" => 'framework/hahaha/ha/table/Parameter.php',
				],
			],
			"hahahalib" => [
				"cache" => [
					"_Items" => [
						"hahaha_cache_doctrine" => 'libraries/hahahalib/composite/cache/doctrine/hahaha_cache_doctrine.php',
					],
				],
				"command" => [
					"_Items" => [
						"hahaha_command_christiaan" => 'libraries/hahahalib/composite/command/christiaan/hahaha_command_christiaan.php',
						"hahaha_command_ravisorg" => 'libraries/hahahalib/composite/command/ravisorg/hahaha_command_ravisorg.php',
						"hahaha_command_tivie" => 'libraries/hahahalib/composite/command/tivie/hahaha_command_tivie.php',
					],
				],
				"css" => [
					"_Items" => [
						"hahaha_css_css_to_inline_styles" => 'libraries/hahahalib/composite/css/css_to_illine_styles/hahaha_css_css_to_inline_styles.php',
					],
				],
				"email" => [
					"_Items" => [
						"hahaha_email_php_mailler" => 'libraries/hahahalib/composite/email/php_mailler/hahaha_email_php_mailler.php',
						"hahaha_email_swift_mailler" => 'libraries/hahahalib/composite/email/swift_maller/hahaha_email_swift_mailler.php',
						"hahaha_email_validator" => 'libraries/hahahalib/composite/email/validator/hahaha_email_validator.php',
					],
				],
				"facebook" => [
					"_Items" => [
						"hahaha_facebook" => 'libraries/hahahalib/composite/facebook/hahaha_facebook.php',
						"hahaha_facebook_messenger" => 'libraries/hahahalib/composite/facebook/messenger/hahaha_facebook_messenger.php',
					],
				],
				"line" => [
					"_Items" => [
						"hahaha_linebot_broadcast" => 'libraries/hahahalib/composite/line/bot/function/hahaha_linebot_broadcast.php',
						"hahaha_linebot_multicast" => 'libraries/hahahalib/composite/line/bot/function/hahaha_linebot_multicast.php',
						"hahaha_linebot_push_message" => 'libraries/hahahalib/composite/line/bot/function/hahaha_linebot_push_message.php',
						"hahaha_linebot_reply_message" => 'libraries/hahahalib/composite/line/bot/function/hahaha_linebot_reply_message.php',
						"hahaha_linebot" => 'libraries/hahahalib/composite/line/bot/hahaha_linebot.php',
					],
				],
				"Extend" => [
					"ExecParallel" => [
						"_Items" => [
							"Job" => 'libraries/hahahalib/extend/command/ravisorg/Job.php',
						],
					],
					"_Items" => [
					],
				],
				"external" => [
					"lite" => [
						"_Items" => [
							"hahaha_external_variable_server_lite" => 'libraries/hahahalib/native/external_variable/lite/hahaha_external_variable_server_lite.php',
						],
					],
					"_Items" => [
						"hahaha_external_variable_arg" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_arg.php',
						"hahaha_external_variable_cookie" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_cookie.php',
						"hahaha_external_variable_env" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_env.php',
						"hahaha_external_variable_files" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_files.php',
						"hahaha_external_variable_get" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_get.php',
						"hahaha_external_variable_globals" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_globals.php',
						"hahaha_external_variable_post" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_post.php',
						"hahaha_external_variable_request" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_request.php',
						"hahaha_external_variable_server" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_server.php',
						"hahaha_external_variable_session" => 'libraries/hahahalib/native/external_variable/hahaha_external_variable_session.php',
					],
				],
				"_Items" => [
					"hahahalib_loader" => 'libraries/autoload_.php',
					"hahaha_lock_mutex" => 'libraries/hahahalib/composite/lock/mutex/hahaha_lock_mutex.php',
					"hahaha_lock_redis" => 'libraries/hahahalib/composite/lock/redis/hahaha_lock_redis.php',
					"hahaha_log" => 'libraries/hahahalib/composite/log/hahaha_log.php',
					"hahaha_orm_doctrine_base" => 'libraries/hahahalib/composite/orm/doctrine/base/hahaha_orm_doctrine_base.php',
					"hahaha_orm_doctrine" => 'libraries/hahahalib/composite/orm/doctrine/hahaha_orm_doctrine.php',
					"hahaha_asset" => 'libraries/hahahalib/native/asset/hahaha_asset.php',
					"hahaha_function_cli" => 'libraries/hahahalib/native/function/hahaha_function_cli.php',
					"hahaha_function_session" => 'libraries/hahahalib/native/function/hahaha_function_session.php',
					"hahaha_language" => 'libraries/hahahalib/native/language/hahaha_language.php',
					"hahaha_parser_url" => 'libraries/hahahalib/native/parser/hahaha_parser_url.php',
					"hahaha_route" => 'libraries/hahahalib/native/route/hahaha_route.php',
					"hahaha_class_instance_handle_trait" => 'libraries/hahahalib/native/trait/hahaha_class_instance_handle_trait.php',
					"hahaha_class_instance_handle_trait_http" => 'libraries/hahahalib/native/trait/hahaha_class_instance_handle_trait_http.php',
					"hahaha_class_instance_handle_trait_lite" => 'libraries/hahahalib/native/trait/hahaha_class_instance_handle_trait_lite.php',
					"hahaha_instance_trait" => 'libraries/hahahalib/native/trait/hahaha_instance_trait.php',
					"hahaha_view" => 'libraries/hahahalib/native/view/hahaha_view.php',
				],
			],
			"vendor" => [
				"_Items" => [
					"vendor_loader" => 'vendor/autoload_.php',
				],
			],
			"BotMan" => [
				"BotMan" => [
					"Cache" => [
						"_Items" => [
							"ArrayCache" => 'vendor/botman/botman/src/Cache/ArrayCache.php',
							"CodeIgniterCache" => 'vendor/botman/botman/src/Cache/CodeIgniterCache.php',
							"DoctrineCache" => 'vendor/botman/botman/src/Cache/DoctrineCache.php',
							"LaravelCache" => 'vendor/botman/botman/src/Cache/LaravelCache.php',
							"Psr6Cache" => 'vendor/botman/botman/src/Cache/Psr6Cache.php',
							"RedisCache" => 'vendor/botman/botman/src/Cache/RedisCache.php',
							"SymfonyCache" => 'vendor/botman/botman/src/Cache/SymfonyCache.php',
						],
					],
					"Commands" => [
						"_Items" => [
							"Command" => 'vendor/botman/botman/src/Commands/Command.php',
							"ConversationManager" => 'vendor/botman/botman/src/Commands/ConversationManager.php',
						],
					],
					"Container" => [
						"_Items" => [
							"LaravelContainer" => 'vendor/botman/botman/src/Container/LaravelContainer.php',
						],
					],
					"Drivers" => [
						"Events" => [
							"_Items" => [
								"GenericEvent" => 'vendor/botman/botman/src/Drivers/Events/GenericEvent.php',
							],
						],
						"_Items" => [
							"DriverManager" => 'vendor/botman/botman/src/Drivers/DriverManager.php',
							"HttpDriver" => 'vendor/botman/botman/src/Drivers/HttpDriver.php',
							"NullDriver" => 'vendor/botman/botman/src/Drivers/NullDriver.php',
						],
					],
					"Exceptions" => [
						"Base" => [
							"_Items" => [
								"BotManException" => 'vendor/botman/botman/src/Exceptions/Base/BotManException.php',
								"DriverAttachmentException" => 'vendor/botman/botman/src/Exceptions/Base/DriverAttachmentException.php',
								"DriverException" => 'vendor/botman/botman/src/Exceptions/Base/DriverException.php',
							],
						],
						"Core" => [
							"_Items" => [
								"BadMethodCallException" => 'vendor/botman/botman/src/Exceptions/Core/BadMethodCallException.php',
								"UnexpectedValueException" => 'vendor/botman/botman/src/Exceptions/Core/UnexpectedValueException.php',
							],
						],
						"_Items" => [
						],
					],
					"Facades" => [
						"_Items" => [
							"BotMan" => 'vendor/botman/botman/src/Facades/BotMan.php',
						],
					],
					"Handlers" => [
						"_Items" => [
							"ExceptionHandler" => 'vendor/botman/botman/src/Handlers/ExceptionHandler.php',
						],
					],
					"Http" => [
						"_Items" => [
							"Curl" => 'vendor/botman/botman/src/Http/Curl.php',
						],
					],
					"Interfaces" => [
						"Middleware" => [
							"_Items" => [
								"Captured" => 'vendor/botman/botman/src/Interfaces/Middleware/Captured.php',
								"Heard" => 'vendor/botman/botman/src/Interfaces/Middleware/Heard.php',
								"Matching" => 'vendor/botman/botman/src/Interfaces/Middleware/Matching.php',
								"Received" => 'vendor/botman/botman/src/Interfaces/Middleware/Received.php',
								"Sending" => 'vendor/botman/botman/src/Interfaces/Middleware/Sending.php',
							],
						],
						"_Items" => [
							"CacheInterface" => 'vendor/botman/botman/src/Interfaces/CacheInterface.php',
							"DriverEventInterface" => 'vendor/botman/botman/src/Interfaces/DriverEventInterface.php',
							"DriverInterface" => 'vendor/botman/botman/src/Interfaces/DriverInterface.php',
							"ExceptionHandlerInterface" => 'vendor/botman/botman/src/Interfaces/ExceptionHandlerInterface.php',
							"HttpInterface" => 'vendor/botman/botman/src/Interfaces/HttpInterface.php',
							"MiddlewareInterface" => 'vendor/botman/botman/src/Interfaces/MiddlewareInterface.php',
							"QuestionActionInterface" => 'vendor/botman/botman/src/Interfaces/QuestionActionInterface.php',
							"ShouldQueue" => 'vendor/botman/botman/src/Interfaces/ShouldQueue.php',
							"StorageInterface" => 'vendor/botman/botman/src/Interfaces/StorageInterface.php',
							"UserInterface" => 'vendor/botman/botman/src/Interfaces/UserInterface.php',
							"VerifiesService" => 'vendor/botman/botman/src/Interfaces/VerifiesService.php',
							"WebAccess" => 'vendor/botman/botman/src/Interfaces/WebAccess.php',
						],
					],
					"Messages" => [
						"Attachments" => [
							"_Items" => [
								"Attachment" => 'vendor/botman/botman/src/Messages/Attachments/Attachment.php',
								"Audio" => 'vendor/botman/botman/src/Messages/Attachments/Audio.php',
								"Contact" => 'vendor/botman/botman/src/Messages/Attachments/Contact.php',
								"File" => 'vendor/botman/botman/src/Messages/Attachments/File.php',
								"Image" => 'vendor/botman/botman/src/Messages/Attachments/Image.php',
								"Location" => 'vendor/botman/botman/src/Messages/Attachments/Location.php',
								"Video" => 'vendor/botman/botman/src/Messages/Attachments/Video.php',
							],
						],
						"Conversations" => [
							"_Items" => [
								"Conversation" => 'vendor/botman/botman/src/Messages/Conversations/Conversation.php',
								"InlineConversation" => 'vendor/botman/botman/src/Messages/Conversations/InlineConversation.php',
							],
						],
						"Incoming" => [
							"_Items" => [
								"Answer" => 'vendor/botman/botman/src/Messages/Incoming/Answer.php',
								"IncomingMessage" => 'vendor/botman/botman/src/Messages/Incoming/IncomingMessage.php',
							],
						],
						"Matching" => [
							"_Items" => [
								"MatchingMessage" => 'vendor/botman/botman/src/Messages/Matching/MatchingMessage.php',
							],
						],
						"Outgoing" => [
							"Actions" => [
								"_Items" => [
									"Button" => 'vendor/botman/botman/src/Messages/Outgoing/Actions/Button.php',
								],
							],
							"_Items" => [
								"OutgoingMessage" => 'vendor/botman/botman/src/Messages/Outgoing/OutgoingMessage.php',
								"Question" => 'vendor/botman/botman/src/Messages/Outgoing/Question.php',
							],
						],
						"_Items" => [
							"Matcher" => 'vendor/botman/botman/src/Messages/Matcher.php',
						],
					],
					"Middleware" => [
						"_Items" => [
							"ApiAi" => 'vendor/botman/botman/src/Middleware/ApiAi.php',
							"Dialogflow" => 'vendor/botman/botman/src/Middleware/Dialogflow.php',
							"MiddlewareManager" => 'vendor/botman/botman/src/Middleware/MiddlewareManager.php',
							"Wit" => 'vendor/botman/botman/src/Middleware/Wit.php',
						],
					],
					"Storages" => [
						"Drivers" => [
							"_Items" => [
								"FileStorage" => 'vendor/botman/botman/src/Storages/Drivers/FileStorage.php',
								"RedisStorage" => 'vendor/botman/botman/src/Storages/Drivers/RedisStorage.php',
							],
						],
						"_Items" => [
							"Storage" => 'vendor/botman/botman/src/Storages/Storage.php',
						],
					],
					"Traits" => [
						"_Items" => [
							"HandlesConversations" => 'vendor/botman/botman/src/Traits/HandlesConversations.php',
							"HandlesExceptions" => 'vendor/botman/botman/src/Traits/HandlesExceptions.php',
							"ProvidesStorage" => 'vendor/botman/botman/src/Traits/ProvidesStorage.php',
						],
					],
					"Users" => [
						"_Items" => [
							"User" => 'vendor/botman/botman/src/Users/User.php',
						],
					],
					"_Items" => [
						"BotMan" => 'vendor/botman/botman/src/BotMan.php',
						"BotManFactory" => 'vendor/botman/botman/src/BotManFactory.php',
						"BotManServiceProvider" => 'vendor/botman/botman/src/BotManServiceProvider.php',
					],
				],
				"Drivers" => [
					"Facebook" => [
						"Commands" => [
							"_Items" => [
								"AddGreetingText" => 'vendor/botman/driver-facebook/src/Commands/AddGreetingText.php',
								"AddPersistentMenu" => 'vendor/botman/driver-facebook/src/Commands/AddPersistentMenu.php',
								"AddStartButtonPayload" => 'vendor/botman/driver-facebook/src/Commands/AddStartButtonPayload.php',
								"Nlp" => 'vendor/botman/driver-facebook/src/Commands/Nlp.php',
								"WhitelistDomains" => 'vendor/botman/driver-facebook/src/Commands/WhitelistDomains.php',
							],
						],
						"Events" => [
							"_Items" => [
								"FacebookEvent" => 'vendor/botman/driver-facebook/src/Events/FacebookEvent.php',
								"MessagingAccountLinking" => 'vendor/botman/driver-facebook/src/Events/MessagingAccountLinking.php',
								"MessagingCheckoutUpdates" => 'vendor/botman/driver-facebook/src/Events/MessagingCheckoutUpdates.php',
								"MessagingDeliveries" => 'vendor/botman/driver-facebook/src/Events/MessagingDeliveries.php',
								"MessagingOptins" => 'vendor/botman/driver-facebook/src/Events/MessagingOptins.php',
								"MessagingPostbacks" => 'vendor/botman/driver-facebook/src/Events/MessagingPostbacks.php',
								"MessagingReads" => 'vendor/botman/driver-facebook/src/Events/MessagingReads.php',
								"MessagingReferrals" => 'vendor/botman/driver-facebook/src/Events/MessagingReferrals.php',
							],
						],
						"Exceptions" => [
							"_Items" => [
								"FacebookException" => 'vendor/botman/driver-facebook/src/Exceptions/FacebookException.php',
							],
						],
						"Extensions" => [
							"Airline" => [
								"_Items" => [
									"AbstractAirlineFlightInfo" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AbstractAirlineFlightInfo.php',
									"AirlineAirport" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlineAirport.php',
									"AirlineBoardingPass" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlineBoardingPass.php',
									"AirlineExtendedFlightInfo" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlineExtendedFlightInfo.php',
									"AirlineFlightInfo" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlineFlightInfo.php',
									"AirlineFlightSchedule" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlineFlightSchedule.php',
									"AirlinePassengerInfo" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlinePassengerInfo.php',
									"AirlinePassengerSegmentInfo" => 'vendor/botman/driver-facebook/src/Extensions/Airline/AirlinePassengerSegmentInfo.php',
								],
							],
							"_Items" => [
								"AbstractAirlineTemplate" => 'vendor/botman/driver-facebook/src/Extensions/AbstractAirlineTemplate.php',
								"AirlineBoardingPassTemplate" => 'vendor/botman/driver-facebook/src/Extensions/AirlineBoardingPassTemplate.php',
								"AirlineCheckInTemplate" => 'vendor/botman/driver-facebook/src/Extensions/AirlineCheckInTemplate.php',
								"AirlineItineraryTemplate" => 'vendor/botman/driver-facebook/src/Extensions/AirlineItineraryTemplate.php',
								"AirlineUpdateTemplate" => 'vendor/botman/driver-facebook/src/Extensions/AirlineUpdateTemplate.php',
								"ButtonTemplate" => 'vendor/botman/driver-facebook/src/Extensions/ButtonTemplate.php',
								"Element" => 'vendor/botman/driver-facebook/src/Extensions/Element.php',
								"ElementButton" => 'vendor/botman/driver-facebook/src/Extensions/ElementButton.php',
								"GenericTemplate" => 'vendor/botman/driver-facebook/src/Extensions/GenericTemplate.php',
								"ListTemplate" => 'vendor/botman/driver-facebook/src/Extensions/ListTemplate.php',
								"MediaAttachmentElement" => 'vendor/botman/driver-facebook/src/Extensions/MediaAttachmentElement.php',
								"MediaTemplate" => 'vendor/botman/driver-facebook/src/Extensions/MediaTemplate.php',
								"MediaUrlElement" => 'vendor/botman/driver-facebook/src/Extensions/MediaUrlElement.php',
								"OpenGraphElement" => 'vendor/botman/driver-facebook/src/Extensions/OpenGraphElement.php',
								"OpenGraphTemplate" => 'vendor/botman/driver-facebook/src/Extensions/OpenGraphTemplate.php',
								"QuickReplyButton" => 'vendor/botman/driver-facebook/src/Extensions/QuickReplyButton.php',
								"ReceiptAddress" => 'vendor/botman/driver-facebook/src/Extensions/ReceiptAddress.php',
								"ReceiptAdjustment" => 'vendor/botman/driver-facebook/src/Extensions/ReceiptAdjustment.php',
								"ReceiptElement" => 'vendor/botman/driver-facebook/src/Extensions/ReceiptElement.php',
								"ReceiptSummary" => 'vendor/botman/driver-facebook/src/Extensions/ReceiptSummary.php',
								"ReceiptTemplate" => 'vendor/botman/driver-facebook/src/Extensions/ReceiptTemplate.php',
								"User" => 'vendor/botman/driver-facebook/src/Extensions/User.php',
							],
						],
						"Interfaces" => [
							"_Items" => [
								"Airline" => 'vendor/botman/driver-facebook/src/Interfaces/Airline.php',
							],
						],
						"Providers" => [
							"_Items" => [
								"FacebookServiceProvider" => 'vendor/botman/driver-facebook/src/Providers/FacebookServiceProvider.php',
							],
						],
						"_Items" => [
							"FacebookAudioDriver" => 'vendor/botman/driver-facebook/src/FacebookAudioDriver.php',
							"FacebookDriver" => 'vendor/botman/driver-facebook/src/FacebookDriver.php',
							"FacebookFileDriver" => 'vendor/botman/driver-facebook/src/FacebookFileDriver.php',
							"FacebookImageDriver" => 'vendor/botman/driver-facebook/src/FacebookImageDriver.php',
							"FacebookLocationDriver" => 'vendor/botman/driver-facebook/src/FacebookLocationDriver.php',
							"FacebookVideoDriver" => 'vendor/botman/driver-facebook/src/FacebookVideoDriver.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Christiaan" => [
				"StreamProcess" => [
					"_Items" => [
						"Exception" => 'vendor/christiaan/stream-process/src/Christiaan/StreamProcess/Exception.php',
						"StreamProcess" => 'vendor/christiaan/stream-process/src/Christiaan/StreamProcess/StreamProcess.php',
					],
				],
				"_Items" => [
				],
			],
			"Composer" => [
				"Autoload" => [
					"_Items" => [
						"ComposerStaticInited52258c47506bb06cd8d32fdf88156a" => 'vendor/composer/autoload_static.php',
						"ClassLoader" => 'vendor/composer/ClassLoader.php',
					],
				],
				"_Items" => [
				],
			],
			"Doctrine" => [
				"Common" => [
					"Annotations" => [
						"Annotation" => [
							"_Items" => [
								"Attribute" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attribute.php',
								"Attributes" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Attributes.php',
								"Enum" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Enum.php',
								"IgnoreAnnotation" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/IgnoreAnnotation.php',
								"Required" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Required.php',
								"Target" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php',
							],
						],
						"_Items" => [
							"Annotation" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation.php',
							"AnnotationException" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationException.php',
							"AnnotationReader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php',
							"AnnotationRegistry" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php',
							"CachedReader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php',
							"DocLexer" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocLexer.php',
							"DocParser" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/DocParser.php',
							"FileCacheReader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/FileCacheReader.php',
							"IndexedReader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/IndexedReader.php',
							"PhpParser" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/PhpParser.php',
							"Reader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php',
							"SimpleAnnotationReader" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
							"TokenParser" => 'vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/TokenParser.php',
						],
					],
					"Cache" => [
						"_Items" => [
							"ApcCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcCache.php',
							"ApcuCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ApcuCache.php',
							"ArrayCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ArrayCache.php',
							"Cache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php',
							"CacheProvider" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php',
							"ChainCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ChainCache.php',
							"ClearableCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php',
							"CouchbaseBucketCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseBucketCache.php',
							"CouchbaseCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/CouchbaseCache.php',
							"ExtMongoDBCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ExtMongoDBCache.php',
							"FileCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/FileCache.php',
							"FilesystemCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/FilesystemCache.php',
							"FlushableCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php',
							"LegacyMongoDBCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/LegacyMongoDBCache.php',
							"MemcacheCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcacheCache.php',
							"MemcachedCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MemcachedCache.php',
							"MongoDBCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MongoDBCache.php',
							"MultiDeleteCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php',
							"MultiGetCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php',
							"MultiOperationCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php',
							"MultiPutCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php',
							"PhpFileCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/PhpFileCache.php',
							"PredisCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/PredisCache.php',
							"RedisCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/RedisCache.php',
							"RiakCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/RiakCache.php',
							"SQLite3Cache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/SQLite3Cache.php',
							"Version" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/Version.php',
							"VoidCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/VoidCache.php',
							"WinCacheCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/WinCacheCache.php',
							"XcacheCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/XcacheCache.php',
							"ZendDataCache" => 'vendor/doctrine/cache/lib/Doctrine/Common/Cache/ZendDataCache.php',
						],
					],
					"Collections" => [
						"Expr" => [
							"_Items" => [
								"ClosureExpressionVisitor" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ClosureExpressionVisitor.php',
								"Comparison" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Comparison.php',
								"CompositeExpression" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/CompositeExpression.php',
								"Expression" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Expression.php',
								"ExpressionVisitor" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/ExpressionVisitor.php',
								"Value" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Expr/Value.php',
							],
						],
						"_Items" => [
							"AbstractLazyCollection" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/AbstractLazyCollection.php',
							"ArrayCollection" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/ArrayCollection.php',
							"Collection" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Collection.php',
							"Criteria" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Criteria.php',
							"ExpressionBuilder" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/ExpressionBuilder.php',
							"Selectable" => 'vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php',
						],
					],
					"Proxy" => [
						"Exception" => [
							"_Items" => [
								"InvalidArgumentException" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/InvalidArgumentException.php',
								"OutOfBoundsException" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/OutOfBoundsException.php',
								"ProxyException" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/ProxyException.php',
								"UnexpectedValueException" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php',
							],
						],
						"_Items" => [
							"AbstractProxyFactory" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/AbstractProxyFactory.php',
							"Autoloader" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Autoloader.php',
							"Proxy" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/Proxy.php',
							"ProxyDefinition" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyDefinition.php',
							"ProxyGenerator" => 'vendor/doctrine/common/lib/Doctrine/Common/Proxy/ProxyGenerator.php',
						],
					],
					"Util" => [
						"_Items" => [
							"ClassUtils" => 'vendor/doctrine/common/lib/Doctrine/Common/Util/ClassUtils.php',
							"Debug" => 'vendor/doctrine/common/lib/Doctrine/Common/Util/Debug.php',
							"Inflector" => 'vendor/doctrine/common/lib/Doctrine/Common/Util/Inflector.php',
						],
					],
					"Inflector" => [
						"_Items" => [
							"Inflector" => 'vendor/doctrine/inflector/lib/Doctrine/Common/Inflector/Inflector.php',
						],
					],
					"Lexer" => [
						"_Items" => [
							"AbstractLexer" => 'vendor/doctrine/lexer/lib/Doctrine/Common/Lexer/AbstractLexer.php',
						],
					],
					"Persistence" => [
						"Event" => [
							"_Items" => [
								"LifecycleEventArgs" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LifecycleEventArgs.php',
								"LoadClassMetadataEventArgs" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/LoadClassMetadataEventArgs.php',
								"ManagerEventArgs" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/ManagerEventArgs.php',
								"OnClearEventArgs" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/OnClearEventArgs.php',
								"PreUpdateEventArgs" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Event/PreUpdateEventArgs.php',
							],
						],
						"Mapping" => [
							"Driver" => [
								"_Items" => [
									"AnnotationDriver" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php',
									"DefaultFileLocator" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/DefaultFileLocator.php',
									"FileDriver" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileDriver.php',
									"FileLocator" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/FileLocator.php',
									"MappingDriver" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php',
									"MappingDriverChain" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/MappingDriverChain.php',
									"PHPDriver" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/PHPDriver.php',
									"StaticPHPDriver" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/StaticPHPDriver.php',
									"SymfonyFileLocator" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/Driver/SymfonyFileLocator.php',
								],
							],
							"_Items" => [
								"AbstractClassMetadataFactory" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/AbstractClassMetadataFactory.php',
								"ClassMetadata" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadata.php',
								"ClassMetadataFactory" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php',
								"MappingException" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/MappingException.php',
								"ReflectionService" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/ReflectionService.php',
								"RuntimeReflectionService" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php',
								"StaticReflectionService" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Mapping/StaticReflectionService.php',
							],
						],
						"_Items" => [
							"AbstractManagerRegistry" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php',
							"ConnectionRegistry" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ConnectionRegistry.php',
							"ManagerRegistry" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ManagerRegistry.php',
							"ObjectManager" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManager.php',
							"ObjectManagerAware" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerAware.php',
							"ObjectManagerDecorator" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectManagerDecorator.php',
							"ObjectRepository" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php',
							"PersistentObject" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/PersistentObject.php',
							"Proxy" => 'vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/Proxy.php',
						],
					],
					"Reflection" => [
						"_Items" => [
							"ClassFinderInterface" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ClassFinderInterface.php',
							"Psr0FindFile" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/Psr0FindFile.php',
							"ReflectionProviderInterface" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/ReflectionProviderInterface.php',
							"RuntimePublicReflectionProperty" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/RuntimePublicReflectionProperty.php',
							"StaticReflectionClass" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionClass.php',
							"StaticReflectionMethod" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionMethod.php',
							"StaticReflectionParser" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionParser.php',
							"StaticReflectionProperty" => 'vendor/doctrine/reflection/lib/Doctrine/Common/Reflection/StaticReflectionProperty.php',
						],
					],
					"_Items" => [
						"ClassLoader" => 'vendor/doctrine/common/lib/Doctrine/Common/ClassLoader.php',
						"CommonException" => 'vendor/doctrine/common/lib/Doctrine/Common/CommonException.php',
						"Comparable" => 'vendor/doctrine/common/lib/Doctrine/Common/Comparable.php',
						"Lexer" => 'vendor/doctrine/common/lib/Doctrine/Common/Lexer.php',
						"Version" => 'vendor/doctrine/common/lib/Doctrine/Common/Version.php',
						"EventArgs" => 'vendor/doctrine/event-manager/lib/Doctrine/Common/EventArgs.php',
						"EventManager" => 'vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php',
						"EventSubscriber" => 'vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php',
						"NotifyPropertyChanged" => 'vendor/doctrine/persistence/lib/Doctrine/Common/NotifyPropertyChanged.php',
						"PropertyChangedListener" => 'vendor/doctrine/persistence/lib/Doctrine/Common/PropertyChangedListener.php',
					],
				],
				"DBAL" => [
					"Cache" => [
						"_Items" => [
							"ArrayStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php',
							"CacheException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/CacheException.php',
							"QueryCacheProfile" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/QueryCacheProfile.php',
							"ResultCacheStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ResultCacheStatement.php',
						],
					],
					"Connections" => [
						"_Items" => [
							"MasterSlaveConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Connections/MasterSlaveConnection.php',
						],
					],
					"Driver" => [
						"AbstractOracleDriver" => [
							"_Items" => [
								"EasyConnectString" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver/EasyConnectString.php',
							],
						],
						"DrizzlePDOMySql" => [
							"_Items" => [
								"Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Connection.php',
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DrizzlePDOMySql/Driver.php',
							],
						],
						"IBMDB2" => [
							"_Items" => [
								"DB2Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Connection.php',
								"DB2Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Driver.php',
								"DB2Exception" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Exception.php',
								"DB2Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/IBMDB2/DB2Statement.php',
							],
						],
						"Mysqli" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/Driver.php',
								"MysqliConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliConnection.php',
								"MysqliException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliException.php',
								"MysqliStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Mysqli/MysqliStatement.php',
							],
						],
						"OCI8" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/Driver.php',
								"OCI8Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Connection.php',
								"OCI8Exception" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Exception.php',
								"OCI8Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/OCI8/OCI8Statement.php',
							],
						],
						"PDOIbm" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOIbm/Driver.php',
							],
						],
						"PDOMySql" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOMySql/Driver.php',
							],
						],
						"PDOOracle" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOOracle/Driver.php',
							],
						],
						"PDOPgSql" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOPgSql/Driver.php',
							],
						],
						"PDOSqlite" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlite/Driver.php',
							],
						],
						"PDOSqlsrv" => [
							"_Items" => [
								"Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Connection.php',
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Driver.php',
								"Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOSqlsrv/Statement.php',
							],
						],
						"SQLAnywhere" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/Driver.php',
								"SQLAnywhereConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereConnection.php',
								"SQLAnywhereException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereException.php',
								"SQLAnywhereStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLAnywhere/SQLAnywhereStatement.php',
							],
						],
						"SQLSrv" => [
							"_Items" => [
								"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/Driver.php',
								"LastInsertId" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/LastInsertId.php',
								"SQLSrvConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvConnection.php',
								"SQLSrvException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvException.php',
								"SQLSrvStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/SQLSrv/SQLSrvStatement.php',
							],
						],
						"_Items" => [
							"AbstractDB2Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDB2Driver.php',
							"AbstractDriverException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractDriverException.php',
							"AbstractMySQLDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractMySQLDriver.php',
							"AbstractOracleDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractOracleDriver.php',
							"AbstractPostgreSQLDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractPostgreSQLDriver.php',
							"AbstractSQLAnywhereDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLAnywhereDriver.php',
							"AbstractSQLiteDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLiteDriver.php',
							"AbstractSQLServerDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/AbstractSQLServerDriver.php',
							"Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php',
							"DriverException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/DriverException.php',
							"ExceptionConverterDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ExceptionConverterDriver.php',
							"PDOConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php',
							"PDOException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOException.php',
							"PDOStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php',
							"PingableConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PingableConnection.php',
							"ResultStatement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ResultStatement.php',
							"ServerInfoAwareConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/ServerInfoAwareConnection.php',
							"Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Statement.php',
							"StatementIterator" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/StatementIterator.php',
						],
					],
					"Event" => [
						"Listeners" => [
							"_Items" => [
								"MysqlSessionInit" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/MysqlSessionInit.php',
								"OracleSessionInit" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/OracleSessionInit.php',
								"SQLSessionInit" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/Listeners/SQLSessionInit.php',
							],
						],
						"_Items" => [
							"ConnectionEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/ConnectionEventArgs.php',
							"SchemaAlterTableAddColumnEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableAddColumnEventArgs.php',
							"SchemaAlterTableChangeColumnEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableChangeColumnEventArgs.php',
							"SchemaAlterTableEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableEventArgs.php',
							"SchemaAlterTableRemoveColumnEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRemoveColumnEventArgs.php',
							"SchemaAlterTableRenameColumnEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaAlterTableRenameColumnEventArgs.php',
							"SchemaColumnDefinitionEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaColumnDefinitionEventArgs.php',
							"SchemaCreateTableColumnEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableColumnEventArgs.php',
							"SchemaCreateTableEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaCreateTableEventArgs.php',
							"SchemaDropTableEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaDropTableEventArgs.php',
							"SchemaEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaEventArgs.php',
							"SchemaIndexDefinitionEventArgs" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Event/SchemaIndexDefinitionEventArgs.php',
						],
					],
					"Exception" => [
						"_Items" => [
							"ConnectionException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/ConnectionException.php',
							"ConstraintViolationException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/ConstraintViolationException.php',
							"DatabaseObjectExistsException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DatabaseObjectExistsException.php',
							"DatabaseObjectNotFoundException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DatabaseObjectNotFoundException.php',
							"DeadlockException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DeadlockException.php',
							"DriverException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/DriverException.php',
							"ForeignKeyConstraintViolationException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/ForeignKeyConstraintViolationException.php',
							"InvalidArgumentException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/InvalidArgumentException.php',
							"InvalidFieldNameException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/InvalidFieldNameException.php',
							"LockWaitTimeoutException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/LockWaitTimeoutException.php',
							"NonUniqueFieldNameException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/NonUniqueFieldNameException.php',
							"NotNullConstraintViolationException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/NotNullConstraintViolationException.php',
							"ReadOnlyException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/ReadOnlyException.php',
							"RetryableException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/RetryableException.php',
							"ServerException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/ServerException.php',
							"SyntaxErrorException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/SyntaxErrorException.php',
							"TableExistsException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/TableExistsException.php',
							"TableNotFoundException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/TableNotFoundException.php',
							"UniqueConstraintViolationException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Exception/UniqueConstraintViolationException.php',
						],
					],
					"Id" => [
						"_Items" => [
							"TableGenerator" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGenerator.php',
							"TableGeneratorSchemaVisitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Id/TableGeneratorSchemaVisitor.php',
						],
					],
					"Logging" => [
						"_Items" => [
							"DebugStack" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php',
							"EchoSQLLogger" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/EchoSQLLogger.php',
							"LoggerChain" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php',
							"SQLLogger" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php',
						],
					],
					"Platforms" => [
						"Keywords" => [
							"_Items" => [
								"DB2Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/DB2Keywords.php',
								"DrizzleKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/DrizzleKeywords.php',
								"KeywordList" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/KeywordList.php',
								"MariaDb102Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MariaDb102Keywords.php',
								"MsSQLKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MsSQLKeywords.php',
								"MySQL57Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQL57Keywords.php',
								"MySQL80Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQL80Keywords.php',
								"MySQLKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/MySQLKeywords.php',
								"OracleKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/OracleKeywords.php',
								"PostgreSQL100Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL100Keywords.php',
								"PostgreSQL91Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL91Keywords.php',
								"PostgreSQL92Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL92Keywords.php',
								"PostgreSQL94Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQL94Keywords.php',
								"PostgreSQLKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/PostgreSQLKeywords.php',
								"ReservedKeywordsValidator" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/ReservedKeywordsValidator.php',
								"SQLAnywhere11Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere11Keywords.php',
								"SQLAnywhere12Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php',
								"SQLAnywhere16Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere16Keywords.php',
								"SQLAnywhereKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhereKeywords.php',
								"SQLiteKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLiteKeywords.php',
								"SQLServer2005Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2005Keywords.php',
								"SQLServer2008Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2008Keywords.php',
								"SQLServer2012Keywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php',
								"SQLServerKeywords" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServerKeywords.php',
							],
						],
						"_Items" => [
							"AbstractPlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/AbstractPlatform.php',
							"DateIntervalUnit" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/DateIntervalUnit.php',
							"DB2Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/DB2Platform.php',
							"DrizzlePlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/DrizzlePlatform.php',
							"MariaDb1027Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MariaDb1027Platform.php',
							"MySQL57Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL57Platform.php',
							"MySQL80Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySQL80Platform.php',
							"MySqlPlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/MySqlPlatform.php',
							"OraclePlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/OraclePlatform.php',
							"PostgreSQL100Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL100Platform.php',
							"PostgreSQL91Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL91Platform.php',
							"PostgreSQL92Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL92Platform.php',
							"PostgreSQL94Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSQL94Platform.php',
							"PostgreSqlPlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/PostgreSqlPlatform.php',
							"SQLAnywhere11Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere11Platform.php',
							"SQLAnywhere12Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere12Platform.php',
							"SQLAnywhere16Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywhere16Platform.php',
							"SQLAnywherePlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAnywherePlatform.php',
							"SQLAzurePlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLAzurePlatform.php',
							"SqlitePlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SqlitePlatform.php',
							"SQLServer2005Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2005Platform.php',
							"SQLServer2008Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2008Platform.php',
							"SQLServer2012Platform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServer2012Platform.php',
							"SQLServerPlatform" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/SQLServerPlatform.php',
							"TrimMode" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/TrimMode.php',
						],
					],
					"Portability" => [
						"_Items" => [
							"Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Connection.php',
							"Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Portability/Statement.php',
						],
					],
					"Query" => [
						"Expression" => [
							"_Items" => [
								"CompositeExpression" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/CompositeExpression.php',
								"ExpressionBuilder" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php',
							],
						],
						"_Items" => [
							"QueryBuilder" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryBuilder.php',
							"QueryException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Query/QueryException.php',
						],
					],
					"Schema" => [
						"Synchronizer" => [
							"_Items" => [
								"AbstractSchemaSynchronizer" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/AbstractSchemaSynchronizer.php',
								"SchemaSynchronizer" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SchemaSynchronizer.php',
								"SingleDatabaseSynchronizer" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Synchronizer/SingleDatabaseSynchronizer.php',
							],
						],
						"Visitor" => [
							"_Items" => [
								"AbstractVisitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/AbstractVisitor.php',
								"CreateSchemaSqlCollector" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/CreateSchemaSqlCollector.php',
								"DropSchemaSqlCollector" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/DropSchemaSqlCollector.php',
								"Graphviz" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Graphviz.php',
								"NamespaceVisitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/NamespaceVisitor.php',
								"RemoveNamespacedAssets" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/RemoveNamespacedAssets.php',
								"SchemaDiffVisitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/SchemaDiffVisitor.php',
								"Visitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Visitor/Visitor.php',
							],
						],
						"_Items" => [
							"AbstractAsset" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/AbstractAsset.php',
							"AbstractSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/AbstractSchemaManager.php',
							"Column" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php',
							"ColumnDiff" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ColumnDiff.php',
							"Comparator" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Comparator.php',
							"Constraint" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Constraint.php',
							"DB2SchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DB2SchemaManager.php',
							"DrizzleSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/DrizzleSchemaManager.php',
							"ForeignKeyConstraint" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/ForeignKeyConstraint.php',
							"Identifier" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Identifier.php',
							"Index" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Index.php',
							"MySqlSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/MySqlSchemaManager.php',
							"OracleSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/OracleSchemaManager.php',
							"PostgreSqlSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/PostgreSqlSchemaManager.php',
							"Schema" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Schema.php',
							"SchemaConfig" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaConfig.php',
							"SchemaDiff" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaDiff.php',
							"SchemaException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SchemaException.php',
							"Sequence" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Sequence.php',
							"SQLAnywhereSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLAnywhereSchemaManager.php',
							"SqliteSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SqliteSchemaManager.php',
							"SQLServerSchemaManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/SQLServerSchemaManager.php',
							"Table" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Table.php',
							"TableDiff" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/TableDiff.php',
							"View" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/View.php',
						],
					],
					"Sharding" => [
						"ShardChoser" => [
							"_Items" => [
								"MultiTenantShardChoser" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/MultiTenantShardChoser.php',
								"ShardChoser" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php',
							],
						],
						"SQLAzure" => [
							"Schema" => [
								"_Items" => [
									"MultiTenantVisitor" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/Schema/MultiTenantVisitor.php',
								],
							],
							"_Items" => [
								"SQLAzureFederationsSynchronizer" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/SQLAzureFederationsSynchronizer.php',
								"SQLAzureShardManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/SQLAzure/SQLAzureShardManager.php',
							],
						],
						"_Items" => [
							"PoolingShardConnection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardConnection.php',
							"PoolingShardManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/PoolingShardManager.php',
							"ShardingException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardingException.php',
							"ShardManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardManager.php',
						],
					],
					"Tools" => [
						"Console" => [
							"Command" => [
								"_Items" => [
									"ImportCommand" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ImportCommand.php',
									"ReservedWordsCommand" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/ReservedWordsCommand.php',
									"RunSqlCommand" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php',
								],
							],
							"Helper" => [
								"_Items" => [
									"ConnectionHelper" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Helper/ConnectionHelper.php',
								],
							],
							"_Items" => [
								"ConsoleRunner" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/ConsoleRunner.php',
							],
						],
						"_Items" => [
							"Dumper" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Dumper.php',
						],
					],
					"Types" => [
						"_Items" => [
							"ArrayType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ArrayType.php',
							"BigIntType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BigIntType.php',
							"BinaryType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BinaryType.php',
							"BlobType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BlobType.php',
							"BooleanType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/BooleanType.php',
							"ConversionException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ConversionException.php',
							"DateImmutableType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateImmutableType.php',
							"DateIntervalType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateIntervalType.php',
							"DateTimeImmutableType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeImmutableType.php',
							"DateTimeType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeType.php',
							"DateTimeTzImmutableType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzImmutableType.php',
							"DateTimeTzType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateTimeTzType.php',
							"DateType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DateType.php',
							"DecimalType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/DecimalType.php',
							"FloatType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/FloatType.php',
							"GuidType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/GuidType.php',
							"IntegerType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/IntegerType.php',
							"JsonArrayType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonArrayType.php',
							"JsonType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/JsonType.php',
							"ObjectType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/ObjectType.php',
							"PhpDateTimeMappingType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/PhpDateTimeMappingType.php',
							"PhpIntegerMappingType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/PhpIntegerMappingType.php',
							"SimpleArrayType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SimpleArrayType.php',
							"SmallIntType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/SmallIntType.php',
							"StringType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/StringType.php',
							"TextType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TextType.php',
							"TimeImmutableType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeImmutableType.php',
							"TimeType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/TimeType.php',
							"Type" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/Type.php',
							"VarDateTimeImmutableType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeImmutableType.php',
							"VarDateTimeType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Types/VarDateTimeType.php',
						],
					],
					"_Items" => [
						"ColumnCase" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/ColumnCase.php',
						"Configuration" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php',
						"Connection" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php',
						"ConnectionException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/ConnectionException.php',
						"DBALException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/DBALException.php',
						"Driver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver.php',
						"DriverManager" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/DriverManager.php',
						"Events" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Events.php',
						"FetchMode" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/FetchMode.php',
						"LockMode" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/LockMode.php',
						"ParameterType" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/ParameterType.php',
						"SQLParserUtils" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/SQLParserUtils.php',
						"SQLParserUtilsException" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/SQLParserUtilsException.php',
						"Statement" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Statement.php',
						"TransactionIsolationLevel" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/TransactionIsolationLevel.php',
						"Version" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php',
						"VersionAwarePlatformDriver" => 'vendor/doctrine/dbal/lib/Doctrine/DBAL/VersionAwarePlatformDriver.php',
					],
				],
				"Instantiator" => [
					"Exception" => [
						"_Items" => [
							"ExceptionInterface" => 'vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/ExceptionInterface.php',
							"InvalidArgumentException" => 'vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/InvalidArgumentException.php',
							"UnexpectedValueException" => 'vendor/doctrine/instantiator/src/Doctrine/Instantiator/Exception/UnexpectedValueException.php',
						],
					],
					"_Items" => [
						"Instantiator" => 'vendor/doctrine/instantiator/src/Doctrine/Instantiator/Instantiator.php',
						"InstantiatorInterface" => 'vendor/doctrine/instantiator/src/Doctrine/Instantiator/InstantiatorInterface.php',
					],
				],
				"ORM" => [
					"Cache" => [
						"Logging" => [
							"_Items" => [
								"CacheLogger" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLogger.php',
								"CacheLoggerChain" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/CacheLoggerChain.php',
								"StatisticsCacheLogger" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Logging/StatisticsCacheLogger.php',
							],
						],
						"Persister" => [
							"Collection" => [
								"_Items" => [
									"AbstractCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/AbstractCollectionPersister.php',
									"CachedCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/CachedCollectionPersister.php',
									"NonStrictReadWriteCachedCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/NonStrictReadWriteCachedCollectionPersister.php',
									"ReadOnlyCachedCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadOnlyCachedCollectionPersister.php',
									"ReadWriteCachedCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Collection/ReadWriteCachedCollectionPersister.php',
								],
							],
							"Entity" => [
								"_Items" => [
									"AbstractEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/AbstractEntityPersister.php',
									"CachedEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/CachedEntityPersister.php',
									"NonStrictReadWriteCachedEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/NonStrictReadWriteCachedEntityPersister.php',
									"ReadOnlyCachedEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadOnlyCachedEntityPersister.php',
									"ReadWriteCachedEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/Entity/ReadWriteCachedEntityPersister.php',
								],
							],
							"_Items" => [
								"CachedPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Persister/CachedPersister.php',
							],
						],
						"Region" => [
							"_Items" => [
								"DefaultMultiGetRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php',
								"DefaultRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultRegion.php',
								"FileLockRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/FileLockRegion.php',
								"UpdateTimestampCache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/UpdateTimestampCache.php',
							],
						],
						"_Items" => [
							"AssociationCacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/AssociationCacheEntry.php',
							"CacheConfiguration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheConfiguration.php',
							"CacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheEntry.php',
							"CacheException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php',
							"CacheFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheFactory.php',
							"CacheKey" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheKey.php',
							"CollectionCacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheEntry.php',
							"CollectionCacheKey" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php',
							"CollectionHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionHydrator.php',
							"ConcurrentRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php',
							"DefaultCache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCache.php',
							"DefaultCacheFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCacheFactory.php',
							"DefaultCollectionHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultCollectionHydrator.php',
							"DefaultEntityHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultEntityHydrator.php',
							"DefaultQueryCache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/DefaultQueryCache.php',
							"EntityCacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/EntityCacheEntry.php',
							"EntityCacheKey" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/EntityCacheKey.php',
							"EntityHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/EntityHydrator.php',
							"Lock" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Lock.php',
							"LockException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/LockException.php',
							"MultiGetRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/MultiGetRegion.php',
							"QueryCache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCache.php',
							"QueryCacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheEntry.php',
							"QueryCacheKey" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheKey.php',
							"QueryCacheValidator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/QueryCacheValidator.php',
							"Region" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region.php',
							"RegionsConfiguration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/RegionsConfiguration.php',
							"TimestampCacheEntry" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/TimestampCacheEntry.php',
							"TimestampCacheKey" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/TimestampCacheKey.php',
							"TimestampQueryCacheValidator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/TimestampQueryCacheValidator.php',
							"TimestampRegion" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache/TimestampRegion.php',
						],
					],
					"Decorator" => [
						"_Items" => [
							"EntityManagerDecorator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Decorator/EntityManagerDecorator.php',
						],
					],
					"Event" => [
						"_Items" => [
							"LifecycleEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/LifecycleEventArgs.php',
							"ListenersInvoker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php',
							"LoadClassMetadataEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/LoadClassMetadataEventArgs.php',
							"OnClassMetadataNotFoundEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/OnClassMetadataNotFoundEventArgs.php',
							"OnClearEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/OnClearEventArgs.php',
							"OnFlushEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/OnFlushEventArgs.php',
							"PostFlushEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/PostFlushEventArgs.php',
							"PreFlushEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreFlushEventArgs.php',
							"PreUpdateEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php',
						],
					],
					"Id" => [
						"_Items" => [
							"AbstractIdGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/AbstractIdGenerator.php',
							"AssignedGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/AssignedGenerator.php',
							"BigIntegerIdentityGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/BigIntegerIdentityGenerator.php',
							"IdentityGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/IdentityGenerator.php',
							"SequenceGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/SequenceGenerator.php',
							"TableGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/TableGenerator.php',
							"UuidGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Id/UuidGenerator.php',
						],
					],
					"Internal" => [
						"Hydration" => [
							"_Items" => [
								"AbstractHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/AbstractHydrator.php',
								"ArrayHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ArrayHydrator.php',
								"HydrationException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/HydrationException.php',
								"IterableResult" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/IterableResult.php',
								"ObjectHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ObjectHydrator.php',
								"ScalarHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/ScalarHydrator.php',
								"SimpleObjectHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php',
								"SingleScalarHydrator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/Hydration/SingleScalarHydrator.php',
							],
						],
						"_Items" => [
							"CommitOrderCalculator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/CommitOrderCalculator.php',
							"HydrationCompleteHandler" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php',
						],
					],
					"Mapping" => [
						"Builder" => [
							"_Items" => [
								"AssociationBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/AssociationBuilder.php',
								"ClassMetadataBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ClassMetadataBuilder.php',
								"EmbeddedBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/EmbeddedBuilder.php',
								"EntityListenerBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/EntityListenerBuilder.php',
								"FieldBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/FieldBuilder.php',
								"ManyToManyAssociationBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/ManyToManyAssociationBuilder.php',
								"OneToManyAssociationBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Builder/OneToManyAssociationBuilder.php',
							],
						],
						"Driver" => [
							"_Items" => [
								"AnnotationDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php',
								"DatabaseDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DatabaseDriver.php',
								"DriverChain" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DriverChain.php',
								"PHPDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/PHPDriver.php',
								"SimplifiedXmlDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedXmlDriver.php',
								"SimplifiedYamlDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/SimplifiedYamlDriver.php',
								"StaticPHPDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/StaticPHPDriver.php',
								"XmlDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/XmlDriver.php',
								"YamlDriver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/YamlDriver.php',
							],
						],
						"Reflection" => [
							"_Items" => [
								"ReflectionPropertiesGetter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Reflection/ReflectionPropertiesGetter.php',
							],
						],
						"_Items" => [
							"Annotation" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Annotation.php',
							"AnsiQuoteStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/AnsiQuoteStrategy.php',
							"AssociationOverride" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/AssociationOverride.php',
							"AssociationOverrides" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/AssociationOverrides.php',
							"AttributeOverride" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/AttributeOverride.php',
							"AttributeOverrides" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/AttributeOverrides.php',
							"Cache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Cache.php',
							"ChangeTrackingPolicy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ChangeTrackingPolicy.php',
							"ClassMetadata" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadata.php',
							"ClassMetadataFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataFactory.php',
							"ClassMetadataInfo" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ClassMetadataInfo.php',
							"Column" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Column.php',
							"ColumnResult" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ColumnResult.php',
							"CustomIdGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/CustomIdGenerator.php',
							"DefaultEntityListenerResolver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultEntityListenerResolver.php',
							"DefaultNamingStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultNamingStrategy.php',
							"DefaultQuoteStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php',
							"DiscriminatorColumn" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DiscriminatorColumn.php',
							"DiscriminatorMap" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DiscriminatorMap.php',
							"Embeddable" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Embeddable.php',
							"Embedded" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Embedded.php',
							"Entity" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Entity.php',
							"EntityListenerResolver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php',
							"EntityListeners" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListeners.php',
							"EntityResult" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityResult.php',
							"FieldResult" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/FieldResult.php',
							"GeneratedValue" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/GeneratedValue.php',
							"HasLifecycleCallbacks" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/HasLifecycleCallbacks.php',
							"Id" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Id.php',
							"Index" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Index.php',
							"InheritanceType" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/InheritanceType.php',
							"JoinColumn" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/JoinColumn.php',
							"JoinColumns" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/JoinColumns.php',
							"JoinTable" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/JoinTable.php',
							"ManyToMany" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ManyToMany.php',
							"ManyToOne" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ManyToOne.php',
							"MappedSuperclass" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/MappedSuperclass.php',
							"MappingException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/MappingException.php',
							"NamedNativeQueries" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamedNativeQueries.php',
							"NamedNativeQuery" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamedNativeQuery.php',
							"NamedQueries" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamedQueries.php',
							"NamedQuery" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamedQuery.php',
							"NamingStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php',
							"OneToMany" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/OneToMany.php',
							"OneToOne" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/OneToOne.php',
							"OrderBy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/OrderBy.php',
							"PostLoad" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PostLoad.php',
							"PostPersist" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PostPersist.php',
							"PostRemove" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PostRemove.php',
							"PostUpdate" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PostUpdate.php',
							"PreFlush" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PreFlush.php',
							"PrePersist" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PrePersist.php',
							"PreRemove" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PreRemove.php',
							"PreUpdate" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/PreUpdate.php',
							"QuoteStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php',
							"ReflectionEmbeddedProperty" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php',
							"SequenceGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/SequenceGenerator.php',
							"SqlResultSetMapping" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/SqlResultSetMapping.php',
							"SqlResultSetMappings" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/SqlResultSetMappings.php',
							"Table" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Table.php',
							"UnderscoreNamingStrategy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php',
							"UniqueConstraint" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UniqueConstraint.php',
							"Version" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Version.php',
						],
					],
					"Persisters" => [
						"Collection" => [
							"_Items" => [
								"AbstractCollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/AbstractCollectionPersister.php',
								"CollectionPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/CollectionPersister.php',
								"ManyToManyPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/ManyToManyPersister.php',
								"OneToManyPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Collection/OneToManyPersister.php',
							],
						],
						"Entity" => [
							"_Items" => [
								"AbstractEntityInheritancePersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/AbstractEntityInheritancePersister.php',
								"BasicEntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/BasicEntityPersister.php',
								"CachedPersisterContext" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/CachedPersisterContext.php',
								"EntityPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/EntityPersister.php',
								"JoinedSubclassPersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/JoinedSubclassPersister.php',
								"SingleTablePersister" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/Entity/SingleTablePersister.php',
							],
						],
						"_Items" => [
							"PersisterException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/PersisterException.php',
							"SqlExpressionVisitor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlExpressionVisitor.php',
							"SqlValueVisitor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Persisters/SqlValueVisitor.php',
						],
					],
					"Proxy" => [
						"_Items" => [
							"Autoloader" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/Autoloader.php',
							"Proxy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/Proxy.php',
							"ProxyFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/ProxyFactory.php',
						],
					],
					"Query" => [
						"AST" => [
							"Functions" => [
								"_Items" => [
									"AbsFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/AbsFunction.php',
									"AvgFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/AvgFunction.php',
									"BitAndFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/BitAndFunction.php',
									"BitOrFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/BitOrFunction.php',
									"ConcatFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/ConcatFunction.php',
									"CountFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CountFunction.php',
									"CurrentDateFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentDateFunction.php',
									"CurrentTimeFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentTimeFunction.php',
									"CurrentTimestampFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/CurrentTimestampFunction.php',
									"DateAddFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateAddFunction.php',
									"DateDiffFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateDiffFunction.php',
									"DateSubFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/DateSubFunction.php',
									"FunctionNode" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/FunctionNode.php',
									"IdentityFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/IdentityFunction.php',
									"LengthFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LengthFunction.php',
									"LocateFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LocateFunction.php',
									"LowerFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/LowerFunction.php',
									"MaxFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/MaxFunction.php',
									"MinFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/MinFunction.php',
									"ModFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/ModFunction.php',
									"SizeFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SizeFunction.php',
									"SqrtFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SqrtFunction.php',
									"SubstringFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SubstringFunction.php',
									"SumFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/SumFunction.php',
									"TrimFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/TrimFunction.php',
									"UpperFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Functions/UpperFunction.php',
								],
							],
							"_Items" => [
								"AggregateExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/AggregateExpression.php',
								"ArithmeticExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticExpression.php',
								"ArithmeticFactor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticFactor.php',
								"ArithmeticTerm" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ArithmeticTerm.php',
								"ASTException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ASTException.php',
								"BetweenExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/BetweenExpression.php',
								"CoalesceExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/CoalesceExpression.php',
								"CollectionMemberExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/CollectionMemberExpression.php',
								"ComparisonExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ComparisonExpression.php',
								"ConditionalExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalExpression.php',
								"ConditionalFactor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalFactor.php',
								"ConditionalPrimary" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalPrimary.php',
								"ConditionalTerm" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ConditionalTerm.php',
								"DeleteClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/DeleteClause.php',
								"DeleteStatement" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/DeleteStatement.php',
								"EmptyCollectionComparisonExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/EmptyCollectionComparisonExpression.php',
								"ExistsExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ExistsExpression.php',
								"FromClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/FromClause.php',
								"GeneralCaseExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/GeneralCaseExpression.php',
								"GroupByClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/GroupByClause.php',
								"HavingClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/HavingClause.php',
								"IdentificationVariableDeclaration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/IdentificationVariableDeclaration.php',
								"IndexBy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/IndexBy.php',
								"InExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/InExpression.php',
								"InputParameter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/InputParameter.php',
								"InstanceOfExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/InstanceOfExpression.php',
								"Join" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Join.php',
								"JoinAssociationDeclaration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinAssociationDeclaration.php',
								"JoinAssociationPathExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinAssociationPathExpression.php',
								"JoinClassPathExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinClassPathExpression.php',
								"JoinVariableDeclaration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/JoinVariableDeclaration.php',
								"LikeExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/LikeExpression.php',
								"Literal" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Literal.php',
								"NewObjectExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/NewObjectExpression.php',
								"Node" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Node.php',
								"NullComparisonExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/NullComparisonExpression.php',
								"NullIfExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/NullIfExpression.php',
								"OrderByClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/OrderByClause.php',
								"OrderByItem" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/OrderByItem.php',
								"ParenthesisExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/ParenthesisExpression.php',
								"PartialObjectExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PartialObjectExpression.php',
								"PathExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php',
								"QuantifiedExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/QuantifiedExpression.php',
								"RangeVariableDeclaration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/RangeVariableDeclaration.php',
								"SelectClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectClause.php',
								"SelectExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectExpression.php',
								"SelectStatement" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SelectStatement.php',
								"SimpleArithmeticExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleArithmeticExpression.php',
								"SimpleCaseExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleCaseExpression.php',
								"SimpleSelectClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleSelectClause.php',
								"SimpleSelectExpression" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleSelectExpression.php',
								"SimpleWhenClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SimpleWhenClause.php',
								"Subselect" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/Subselect.php',
								"SubselectFromClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SubselectFromClause.php',
								"SubselectIdentificationVariableDeclaration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/SubselectIdentificationVariableDeclaration.php',
								"UpdateClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateClause.php',
								"UpdateItem" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateItem.php',
								"UpdateStatement" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/UpdateStatement.php',
								"WhenClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/WhenClause.php',
								"WhereClause" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/WhereClause.php',
							],
						],
						"Exec" => [
							"_Items" => [
								"AbstractSqlExecutor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/AbstractSqlExecutor.php',
								"MultiTableDeleteExecutor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableDeleteExecutor.php',
								"MultiTableUpdateExecutor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/MultiTableUpdateExecutor.php',
								"SingleSelectExecutor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/SingleSelectExecutor.php',
								"SingleTableDeleteUpdateExecutor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Exec/SingleTableDeleteUpdateExecutor.php',
							],
						],
						"Expr" => [
							"_Items" => [
								"Andx" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Andx.php',
								"Base" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Base.php',
								"Comparison" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Comparison.php',
								"Composite" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Composite.php',
								"From" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/From.php',
								"Func" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Func.php',
								"GroupBy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/GroupBy.php',
								"Join" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Join.php',
								"Literal" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Literal.php',
								"Math" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Math.php',
								"OrderBy" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/OrderBy.php',
								"Orx" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Orx.php',
								"Select" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr/Select.php',
							],
						],
						"Filter" => [
							"_Items" => [
								"SQLFilter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Filter/SQLFilter.php',
							],
						],
						"_Items" => [
							"Expr" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Expr.php',
							"FilterCollection" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php',
							"Lexer" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Lexer.php',
							"Parameter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parameter.php',
							"ParameterTypeInferer" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/ParameterTypeInferer.php',
							"Parser" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Parser.php',
							"ParserResult" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/ParserResult.php',
							"Printer" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php',
							"QueryException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/QueryException.php',
							"QueryExpressionVisitor" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/QueryExpressionVisitor.php',
							"ResultSetMapping" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/ResultSetMapping.php',
							"ResultSetMappingBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/ResultSetMappingBuilder.php',
							"SqlWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/SqlWalker.php',
							"TreeWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/TreeWalker.php',
							"TreeWalkerAdapter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerAdapter.php',
							"TreeWalkerChain" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerChain.php',
							"TreeWalkerChainIterator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query/TreeWalkerChainIterator.php',
						],
					],
					"Repository" => [
						"_Items" => [
							"DefaultRepositoryFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Repository/DefaultRepositoryFactory.php',
							"RepositoryFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php',
						],
					],
					"Tools" => [
						"Console" => [
							"Command" => [
								"ClearCache" => [
									"_Items" => [
										"CollectionRegionCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/CollectionRegionCommand.php',
										"EntityRegionCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/EntityRegionCommand.php',
										"MetadataCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/MetadataCommand.php',
										"QueryCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryCommand.php',
										"QueryRegionCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/QueryRegionCommand.php',
										"ResultCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ClearCache/ResultCommand.php',
									],
								],
								"SchemaTool" => [
									"_Items" => [
										"AbstractCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/AbstractCommand.php',
										"CreateCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/CreateCommand.php',
										"DropCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/DropCommand.php',
										"UpdateCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/SchemaTool/UpdateCommand.php',
									],
								],
								"_Items" => [
									"ConvertDoctrine1SchemaCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertDoctrine1SchemaCommand.php',
									"ConvertMappingCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ConvertMappingCommand.php',
									"EnsureProductionSettingsCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/EnsureProductionSettingsCommand.php',
									"GenerateEntitiesCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateEntitiesCommand.php',
									"GenerateProxiesCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateProxiesCommand.php',
									"GenerateRepositoriesCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/GenerateRepositoriesCommand.php',
									"InfoCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/InfoCommand.php',
									"MappingDescribeCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/MappingDescribeCommand.php',
									"RunDqlCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/RunDqlCommand.php',
									"ValidateSchemaCommand" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Command/ValidateSchemaCommand.php',
								],
							],
							"Helper" => [
								"_Items" => [
									"EntityManagerHelper" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/Helper/EntityManagerHelper.php',
								],
							],
							"_Items" => [
								"ConsoleRunner" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/ConsoleRunner.php',
								"MetadataFilter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php',
							],
						],
						"Event" => [
							"_Items" => [
								"GenerateSchemaEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaEventArgs.php',
								"GenerateSchemaTableEventArgs" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Event/GenerateSchemaTableEventArgs.php',
							],
						],
						"Export" => [
							"Driver" => [
								"_Items" => [
									"AbstractExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AbstractExporter.php',
									"AnnotationExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/AnnotationExporter.php',
									"PhpExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/PhpExporter.php',
									"XmlExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/XmlExporter.php',
									"YamlExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/Driver/YamlExporter.php',
								],
							],
							"_Items" => [
								"ClassMetadataExporter" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ClassMetadataExporter.php',
								"ExportException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Export/ExportException.php',
							],
						],
						"Pagination" => [
							"_Items" => [
								"CountOutputWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountOutputWalker.php',
								"CountWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/CountWalker.php',
								"LimitSubqueryOutputWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/LimitSubqueryOutputWalker.php',
								"LimitSubqueryWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/LimitSubqueryWalker.php',
								"Paginator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/Paginator.php',
								"RowNumberOverFunction" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/RowNumberOverFunction.php',
								"WhereInWalker" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Pagination/WhereInWalker.php',
							],
						],
						"_Items" => [
							"AttachEntityListenersListener" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php',
							"ConvertDoctrine1Schema" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ConvertDoctrine1Schema.php',
							"DebugUnitOfWorkListener" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/DebugUnitOfWorkListener.php',
							"DisconnectedClassMetadataFactory" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/DisconnectedClassMetadataFactory.php',
							"EntityGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/EntityGenerator.php',
							"EntityRepositoryGenerator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/EntityRepositoryGenerator.php',
							"ResolveTargetEntityListener" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php',
							"SchemaTool" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/SchemaTool.php',
							"SchemaValidator" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/SchemaValidator.php',
							"Setup" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Setup.php',
							"ToolEvents" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ToolEvents.php',
							"ToolsException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ToolsException.php',
						],
					],
					"Utility" => [
						"_Items" => [
							"HierarchyDiscriminatorResolver" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Utility/HierarchyDiscriminatorResolver.php',
							"IdentifierFlattener" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php',
							"PersisterHelper" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php',
						],
					],
					"_Items" => [
						"AbstractQuery" => 'vendor/doctrine/orm/lib/Doctrine/ORM/AbstractQuery.php',
						"Cache" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Cache.php',
						"Configuration" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php',
						"EntityManager" => 'vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php',
						"EntityManagerInterface" => 'vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php',
						"EntityNotFoundException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/EntityNotFoundException.php',
						"EntityRepository" => 'vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php',
						"Events" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Events.php',
						"LazyCriteriaCollection" => 'vendor/doctrine/orm/lib/Doctrine/ORM/LazyCriteriaCollection.php',
						"NativeQuery" => 'vendor/doctrine/orm/lib/Doctrine/ORM/NativeQuery.php',
						"NonUniqueResultException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/NonUniqueResultException.php',
						"NoResultException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/NoResultException.php',
						"OptimisticLockException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/OptimisticLockException.php',
						"ORMException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/ORMException.php',
						"ORMInvalidArgumentException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/ORMInvalidArgumentException.php',
						"PersistentCollection" => 'vendor/doctrine/orm/lib/Doctrine/ORM/PersistentCollection.php',
						"PessimisticLockException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/PessimisticLockException.php',
						"Query" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Query.php',
						"QueryBuilder" => 'vendor/doctrine/orm/lib/Doctrine/ORM/QueryBuilder.php',
						"TransactionRequiredException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/TransactionRequiredException.php',
						"UnexpectedResultException" => 'vendor/doctrine/orm/lib/Doctrine/ORM/UnexpectedResultException.php',
						"UnitOfWork" => 'vendor/doctrine/orm/lib/Doctrine/ORM/UnitOfWork.php',
						"Version" => 'vendor/doctrine/orm/lib/Doctrine/ORM/Version.php',
					],
				],
				"_Items" => [
				],
			],
			"Egulias" => [
				"EmailValidator" => [
					"Exception" => [
						"_Items" => [
							"AtextAfterCFWS" => 'vendor/egulias/email-validator/EmailValidator/Exception/AtextAfterCFWS.php',
							"CharNotAllowed" => 'vendor/egulias/email-validator/EmailValidator/Exception/CharNotAllowed.php',
							"CommaInDomain" => 'vendor/egulias/email-validator/EmailValidator/Exception/CommaInDomain.php',
							"ConsecutiveAt" => 'vendor/egulias/email-validator/EmailValidator/Exception/ConsecutiveAt.php',
							"ConsecutiveDot" => 'vendor/egulias/email-validator/EmailValidator/Exception/ConsecutiveDot.php',
							"CRLFAtTheEnd" => 'vendor/egulias/email-validator/EmailValidator/Exception/CRLFAtTheEnd.php',
							"CRLFX2" => 'vendor/egulias/email-validator/EmailValidator/Exception/CRLFX2.php',
							"CRNoLF" => 'vendor/egulias/email-validator/EmailValidator/Exception/CRNoLF.php',
							"DomainHyphened" => 'vendor/egulias/email-validator/EmailValidator/Exception/DomainHyphened.php',
							"DotAtEnd" => 'vendor/egulias/email-validator/EmailValidator/Exception/DotAtEnd.php',
							"DotAtStart" => 'vendor/egulias/email-validator/EmailValidator/Exception/DotAtStart.php',
							"ExpectingAT" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingAT.php',
							"ExpectingATEXT" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingATEXT.php',
							"ExpectingCTEXT" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingCTEXT.php',
							"ExpectingDomainLiteralClose" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingDomainLiteralClose.php',
							"ExpectingDTEXT" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingDTEXT.php',
							"ExpectingQPair" => 'vendor/egulias/email-validator/EmailValidator/Exception/ExpectingQPair.php',
							"InvalidEmail" => 'vendor/egulias/email-validator/EmailValidator/Exception/InvalidEmail.php',
							"NoDNSRecord" => 'vendor/egulias/email-validator/EmailValidator/Exception/NoDNSRecord.php',
							"NoDomainPart" => 'vendor/egulias/email-validator/EmailValidator/Exception/NoDomainPart.php',
							"NoLocalPart" => 'vendor/egulias/email-validator/EmailValidator/Exception/NoLocalPart.php',
							"UnclosedComment" => 'vendor/egulias/email-validator/EmailValidator/Exception/UnclosedComment.php',
							"UnclosedQuotedString" => 'vendor/egulias/email-validator/EmailValidator/Exception/UnclosedQuotedString.php',
							"UnopenedComment" => 'vendor/egulias/email-validator/EmailValidator/Exception/UnopenedComment.php',
						],
					],
					"Parser" => [
						"_Items" => [
							"DomainPart" => 'vendor/egulias/email-validator/EmailValidator/Parser/DomainPart.php',
							"LocalPart" => 'vendor/egulias/email-validator/EmailValidator/Parser/LocalPart.php',
							"Parser" => 'vendor/egulias/email-validator/EmailValidator/Parser/Parser.php',
						],
					],
					"Validation" => [
						"Error" => [
							"_Items" => [
								"RFCWarnings" => 'vendor/egulias/email-validator/EmailValidator/Validation/Error/RFCWarnings.php',
								"SpoofEmail" => 'vendor/egulias/email-validator/EmailValidator/Validation/Error/SpoofEmail.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"EmptyValidationList" => 'vendor/egulias/email-validator/EmailValidator/Validation/Exception/EmptyValidationList.php',
							],
						],
						"_Items" => [
							"DNSCheckValidation" => 'vendor/egulias/email-validator/EmailValidator/Validation/DNSCheckValidation.php',
							"EmailValidation" => 'vendor/egulias/email-validator/EmailValidator/Validation/EmailValidation.php',
							"MultipleErrors" => 'vendor/egulias/email-validator/EmailValidator/Validation/MultipleErrors.php',
							"MultipleValidationWithAnd" => 'vendor/egulias/email-validator/EmailValidator/Validation/MultipleValidationWithAnd.php',
							"NoRFCWarningsValidation" => 'vendor/egulias/email-validator/EmailValidator/Validation/NoRFCWarningsValidation.php',
							"RFCValidation" => 'vendor/egulias/email-validator/EmailValidator/Validation/RFCValidation.php',
							"SpoofCheckValidation" => 'vendor/egulias/email-validator/EmailValidator/Validation/SpoofCheckValidation.php',
						],
					],
					"Warning" => [
						"_Items" => [
							"AddressLiteral" => 'vendor/egulias/email-validator/EmailValidator/Warning/AddressLiteral.php',
							"CFWSNearAt" => 'vendor/egulias/email-validator/EmailValidator/Warning/CFWSNearAt.php',
							"CFWSWithFWS" => 'vendor/egulias/email-validator/EmailValidator/Warning/CFWSWithFWS.php',
							"Comment" => 'vendor/egulias/email-validator/EmailValidator/Warning/Comment.php',
							"DeprecatedComment" => 'vendor/egulias/email-validator/EmailValidator/Warning/DeprecatedComment.php',
							"DomainLiteral" => 'vendor/egulias/email-validator/EmailValidator/Warning/DomainLiteral.php',
							"DomainTooLong" => 'vendor/egulias/email-validator/EmailValidator/Warning/DomainTooLong.php',
							"EmailTooLong" => 'vendor/egulias/email-validator/EmailValidator/Warning/EmailTooLong.php',
							"IPV6BadChar" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6BadChar.php',
							"IPV6ColonEnd" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6ColonEnd.php',
							"IPV6ColonStart" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6ColonStart.php',
							"IPV6Deprecated" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6Deprecated.php',
							"IPV6DoubleColon" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6DoubleColon.php',
							"IPV6GroupCount" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6GroupCount.php',
							"IPV6MaxGroups" => 'vendor/egulias/email-validator/EmailValidator/Warning/IPV6MaxGroups.php',
							"LabelTooLong" => 'vendor/egulias/email-validator/EmailValidator/Warning/LabelTooLong.php',
							"LocalTooLong" => 'vendor/egulias/email-validator/EmailValidator/Warning/LocalTooLong.php',
							"NoDNSMXRecord" => 'vendor/egulias/email-validator/EmailValidator/Warning/NoDNSMXRecord.php',
							"ObsoleteDTEXT" => 'vendor/egulias/email-validator/EmailValidator/Warning/ObsoleteDTEXT.php',
							"QuotedPart" => 'vendor/egulias/email-validator/EmailValidator/Warning/QuotedPart.php',
							"QuotedString" => 'vendor/egulias/email-validator/EmailValidator/Warning/QuotedString.php',
							"TLD" => 'vendor/egulias/email-validator/EmailValidator/Warning/TLD.php',
							"Warning" => 'vendor/egulias/email-validator/EmailValidator/Warning/Warning.php',
						],
					],
					"_Items" => [
						"EmailLexer" => 'vendor/egulias/email-validator/EmailValidator/EmailLexer.php',
						"EmailParser" => 'vendor/egulias/email-validator/EmailValidator/EmailParser.php',
						"EmailValidator" => 'vendor/egulias/email-validator/EmailValidator/EmailValidator.php',
					],
				],
				"_Items" => [
				],
			],
			"Evenement" => [
				"_Items" => [
					"EventEmitter" => 'vendor/evenement/evenement/src/Evenement/EventEmitter.php',
					"EventEmitterInterface" => 'vendor/evenement/evenement/src/Evenement/EventEmitterInterface.php',
					"EventEmitterTrait" => 'vendor/evenement/evenement/src/Evenement/EventEmitterTrait.php',
				],
			],
			"LINE" => [
				"LINEBot" => [
					"EchoBot" => [
						"_Items" => [
							"Dependency" => 'vendor/linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Dependency.php',
							"Route" => 'vendor/linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Route.php',
							"Setting" => 'vendor/linecorp/line-bot-sdk/examples/EchoBot/src/LINEBot/EchoBot/Setting.php',
						],
					],
					"KitchenSink" => [
						"EventHandler" => [
							"MessageHandler" => [
								"Flex" => [
									"_Items" => [
										"FlexSampleRestaurant" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Flex/FlexSampleRestaurant.php',
										"FlexSampleShopping" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Flex/FlexSampleShopping.php',
									],
								],
								"Util" => [
									"_Items" => [
										"UrlBuilder" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/Util/UrlBuilder.php',
									],
								],
								"_Items" => [
									"AudioMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/AudioMessageHandler.php',
									"ImageMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/ImageMessageHandler.php',
									"LocationMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/LocationMessageHandler.php',
									"StickerMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/StickerMessageHandler.php',
									"TextMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/TextMessageHandler.php',
									"VideoMessageHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/MessageHandler/VideoMessageHandler.php',
								],
							],
							"_Items" => [
								"BeaconEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/BeaconEventHandler.php',
								"FollowEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/FollowEventHandler.php',
								"JoinEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/JoinEventHandler.php',
								"LeaveEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/LeaveEventHandler.php',
								"PostbackEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/PostbackEventHandler.php',
								"ThingsEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/ThingsEventHandler.php',
								"UnfollowEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/UnfollowEventHandler.php',
							],
						],
						"_Items" => [
							"Dependency" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Dependency.php',
							"AccountLinkEventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler/AccountLinkEventHandler.php',
							"EventHandler" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/EventHandler.php',
							"Route" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Route.php',
							"Setting" => 'vendor/linecorp/line-bot-sdk/examples/KitchenSink/src/LINEBot/KitchenSink/Setting.php',
						],
					],
					"Constant" => [
						"Flex" => [
							"_Items" => [
								"BubleContainerSize" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/BubleContainerSize.php',
								"ComponentAlign" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentAlign.php',
								"ComponentBorderWidth" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentBorderWidth.php',
								"ComponentButtonHeight" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentButtonHeight.php',
								"ComponentButtonStyle" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentButtonStyle.php',
								"ComponentFontSize" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentFontSize.php',
								"ComponentFontWeight" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentFontWeight.php',
								"ComponentGravity" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentGravity.php',
								"ComponentIconAspectRatio" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentIconAspectRatio.php',
								"ComponentIconSize" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentIconSize.php',
								"ComponentImageAspectMode" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageAspectMode.php',
								"ComponentImageAspectRatio" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageAspectRatio.php',
								"ComponentImageSize" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentImageSize.php',
								"ComponentLayout" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentLayout.php',
								"ComponentMargin" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentMargin.php',
								"ComponentPosition" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentPosition.php',
								"ComponentSpaceSize" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentSpaceSize.php',
								"ComponentSpacing" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentSpacing.php',
								"ComponentTextDecoration" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentTextDecoration.php',
								"ComponentTextStyle" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentTextStyle.php',
								"ComponentType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ComponentType.php',
								"ContainerDirection" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ContainerDirection.php',
								"ContainerType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Flex/ContainerType.php',
							],
						],
						"_Items" => [
							"ActionType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/ActionType.php',
							"EventSourceType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/EventSourceType.php',
							"HTTPHeader" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/HTTPHeader.php',
							"MessageContentProviderType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/MessageContentProviderType.php',
							"MessageType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/MessageType.php',
							"Meta" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/Meta.php',
							"TemplateType" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Constant/TemplateType.php',
						],
					],
					"Event" => [
						"MessageEvent" => [
							"_Items" => [
								"AudioMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/AudioMessage.php',
								"ContentProvider" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/ContentProvider.php',
								"FileMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/FileMessage.php',
								"ImageMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/ImageMessage.php',
								"LocationMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/LocationMessage.php',
								"StickerMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/StickerMessage.php',
								"TextMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/TextMessage.php',
								"UnknownMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/UnknownMessage.php',
								"VideoMessage" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent/VideoMessage.php',
							],
						],
						"Parser" => [
							"_Items" => [
								"EventRequestParser" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/Parser/EventRequestParser.php',
							],
						],
						"Things" => [
							"_Items" => [
								"ThingsResult" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/Things/ThingsResult.php',
								"ThingsResultAction" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/Things/ThingsResultAction.php',
							],
						],
						"_Items" => [
							"AccountLinkEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/AccountLinkEvent.php',
							"BaseEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/BaseEvent.php',
							"BeaconDetectionEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/BeaconDetectionEvent.php',
							"FollowEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/FollowEvent.php',
							"JoinEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/JoinEvent.php',
							"LeaveEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/LeaveEvent.php',
							"MemberJoinEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MemberJoinEvent.php',
							"MemberLeaveEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MemberLeaveEvent.php',
							"MessageEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/MessageEvent.php',
							"PostbackEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/PostbackEvent.php',
							"ThingsEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/ThingsEvent.php',
							"UnfollowEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/UnfollowEvent.php',
							"UnknownEvent" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Event/UnknownEvent.php',
						],
					],
					"Exception" => [
						"_Items" => [
							"CurlExecutionException" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Exception/CurlExecutionException.php',
							"InvalidEventRequestException" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidEventRequestException.php',
							"InvalidEventSourceException" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidEventSourceException.php',
							"InvalidSignatureException" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Exception/InvalidSignatureException.php',
						],
					],
					"HTTPClient" => [
						"_Items" => [
							"Curl" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/HTTPClient/Curl.php',
							"CurlHTTPClient" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/HTTPClient/CurlHTTPClient.php',
						],
					],
					"ImagemapActionBuilder" => [
						"_Items" => [
							"AreaBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/AreaBuilder.php',
							"ImagemapMessageActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/ImagemapMessageActionBuilder.php',
							"ImagemapUriActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder/ImagemapUriActionBuilder.php',
						],
					],
					"MessageBuilder" => [
						"Flex" => [
							"ComponentBuilder" => [
								"_Items" => [
									"BoxComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/BoxComponentBuilder.php',
									"ButtonComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/ButtonComponentBuilder.php',
									"FillerComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/FillerComponentBuilder.php',
									"IconComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/IconComponentBuilder.php',
									"ImageComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/ImageComponentBuilder.php',
									"SeparatorComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SeparatorComponentBuilder.php',
									"SpacerComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SpacerComponentBuilder.php',
									"SpanComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/SpanComponentBuilder.php',
									"TextComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder/TextComponentBuilder.php',
								],
							],
							"ContainerBuilder" => [
								"_Items" => [
									"BubbleContainerBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder/BubbleContainerBuilder.php',
									"CarouselContainerBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder/CarouselContainerBuilder.php',
								],
							],
							"_Items" => [
								"BlockStyleBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/BlockStyleBuilder.php',
								"BubbleStylesBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/BubbleStylesBuilder.php',
								"ComponentBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ComponentBuilder.php',
								"ContainerBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Flex/ContainerBuilder.php',
							],
						],
						"Imagemap" => [
							"_Items" => [
								"BaseSizeBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/BaseSizeBuilder.php',
								"ExternalLinkBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/ExternalLinkBuilder.php',
								"VideoBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/Imagemap/VideoBuilder.php',
							],
						],
						"TemplateBuilder" => [
							"_Items" => [
								"ButtonTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ButtonTemplateBuilder.php',
								"CarouselColumnTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/CarouselColumnTemplateBuilder.php',
								"CarouselTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/CarouselTemplateBuilder.php',
								"ConfirmTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ConfirmTemplateBuilder.php',
								"ImageCarouselColumnTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ImageCarouselColumnTemplateBuilder.php',
								"ImageCarouselTemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder/ImageCarouselTemplateBuilder.php',
							],
						],
						"_Items" => [
							"AudioMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/AudioMessageBuilder.php',
							"FlexMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/FlexMessageBuilder.php',
							"ImagemapMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/ImagemapMessageBuilder.php',
							"ImageMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/ImageMessageBuilder.php',
							"LocationMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/LocationMessageBuilder.php',
							"MultiMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/MultiMessageBuilder.php',
							"RawMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/RawMessageBuilder.php',
							"StickerMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/StickerMessageBuilder.php',
							"TemplateBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateBuilder.php',
							"TemplateMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TemplateMessageBuilder.php',
							"TextMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/TextMessageBuilder.php',
							"VideoMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder/VideoMessageBuilder.php',
						],
					],
					"QuickReplyBuilder" => [
						"ButtonBuilder" => [
							"_Items" => [
								"QuickReplyButtonBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/ButtonBuilder/QuickReplyButtonBuilder.php',
							],
						],
						"_Items" => [
							"QuickReplyButtonBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/QuickReplyButtonBuilder.php',
							"QuickReplyMessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder/QuickReplyMessageBuilder.php',
						],
					],
					"RichMenuBuilder" => [
						"_Items" => [
							"RichMenuAreaBoundsBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuAreaBoundsBuilder.php',
							"RichMenuAreaBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuAreaBuilder.php',
							"RichMenuSizeBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder/RichMenuSizeBuilder.php',
						],
					],
					"TemplateActionBuilder" => [
						"Uri" => [
							"_Items" => [
								"AltUriBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/Uri/AltUriBuilder.php',
							],
						],
						"_Items" => [
							"CameraRollTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/CameraRollTemplateActionBuilder.php',
							"CameraTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/CameraTemplateActionBuilder.php',
							"DatetimePickerTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/DatetimePickerTemplateActionBuilder.php',
							"LocationTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/LocationTemplateActionBuilder.php',
							"MessageTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/MessageTemplateActionBuilder.php',
							"PostbackTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/PostbackTemplateActionBuilder.php',
							"UriTemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder/UriTemplateActionBuilder.php',
						],
					],
					"Util" => [
						"_Items" => [
							"BuildUtil" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Util/BuildUtil.php',
						],
					],
					"_Items" => [
						"HTTPClient" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/HTTPClient.php',
						"ImagemapActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/ImagemapActionBuilder.php',
						"MessageBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/MessageBuilder.php',
						"QuickReplyBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/QuickReplyBuilder.php',
						"Response" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/Response.php',
						"RichMenuBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/RichMenuBuilder.php',
						"SignatureValidator" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/SignatureValidator.php',
						"TemplateActionBuilder" => 'vendor/linecorp/line-bot-sdk/src/LINEBot/TemplateActionBuilder.php',
					],
				],
				"_Items" => [
					"LINEBot" => 'vendor/linecorp/line-bot-sdk/src/LINEBot.php',
				],
			],
			"malkusch" => [
				"lock" => [
					"exception" => [
						"_Items" => [
							"DeadlineException" => 'vendor/malkusch/lock/classes/exception/DeadlineException.php',
							"ExecutionOutsideLockException" => 'vendor/malkusch/lock/classes/exception/ExecutionOutsideLockException.php',
							"LockAcquireException" => 'vendor/malkusch/lock/classes/exception/LockAcquireException.php',
							"LockReleaseException" => 'vendor/malkusch/lock/classes/exception/LockReleaseException.php',
							"MutexException" => 'vendor/malkusch/lock/classes/exception/MutexException.php',
							"TimeoutException" => 'vendor/malkusch/lock/classes/exception/TimeoutException.php',
						],
					],
					"mutex" => [
						"_Items" => [
							"CASMutex" => 'vendor/malkusch/lock/classes/mutex/CASMutex.php',
							"FlockMutex" => 'vendor/malkusch/lock/classes/mutex/FlockMutex.php',
							"LockMutex" => 'vendor/malkusch/lock/classes/mutex/LockMutex.php',
							"MemcachedMutex" => 'vendor/malkusch/lock/classes/mutex/MemcachedMutex.php',
							"Mutex" => 'vendor/malkusch/lock/classes/mutex/Mutex.php',
							"MySQLMutex" => 'vendor/malkusch/lock/classes/mutex/MySQLMutex.php',
							"NoMutex" => 'vendor/malkusch/lock/classes/mutex/NoMutex.php',
							"PgAdvisoryLockMutex" => 'vendor/malkusch/lock/classes/mutex/PgAdvisoryLockMutex.php',
							"PHPRedisMutex" => 'vendor/malkusch/lock/classes/mutex/PHPRedisMutex.php',
							"PredisMutex" => 'vendor/malkusch/lock/classes/mutex/PredisMutex.php',
							"RedisMutex" => 'vendor/malkusch/lock/classes/mutex/RedisMutex.php',
							"SemaphoreMutex" => 'vendor/malkusch/lock/classes/mutex/SemaphoreMutex.php',
							"SpinlockMutex" => 'vendor/malkusch/lock/classes/mutex/SpinlockMutex.php',
							"TransactionalMutex" => 'vendor/malkusch/lock/classes/mutex/TransactionalMutex.php',
						],
					],
					"util" => [
						"_Items" => [
							"DoubleCheckedLocking" => 'vendor/malkusch/lock/classes/util/DoubleCheckedLocking.php',
							"Loop" => 'vendor/malkusch/lock/classes/util/Loop.php',
							"PcntlTimeout" => 'vendor/malkusch/lock/classes/util/PcntlTimeout.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Monolog" => [
				"Formatter" => [
					"_Items" => [
						"ChromePHPFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/ChromePHPFormatter.php',
						"ElasticaFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/ElasticaFormatter.php',
						"ElasticsearchFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/ElasticsearchFormatter.php',
						"FlowdockFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php',
						"FluentdFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php',
						"FormatterInterface" => 'vendor/monolog/monolog/src/Monolog/Formatter/FormatterInterface.php',
						"GelfMessageFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/GelfMessageFormatter.php',
						"HtmlFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/HtmlFormatter.php',
						"JsonFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/JsonFormatter.php',
						"LineFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/LineFormatter.php',
						"LogglyFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php',
						"LogmaticFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/LogmaticFormatter.php',
						"LogstashFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/LogstashFormatter.php',
						"MongoDBFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/MongoDBFormatter.php',
						"NormalizerFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/NormalizerFormatter.php',
						"ScalarFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/ScalarFormatter.php',
						"WildfireFormatter" => 'vendor/monolog/monolog/src/Monolog/Formatter/WildfireFormatter.php',
					],
				],
				"Handler" => [
					"Curl" => [
						"_Items" => [
							"Util" => 'vendor/monolog/monolog/src/Monolog/Handler/Curl/Util.php',
						],
					],
					"FingersCrossed" => [
						"_Items" => [
							"ActivationStrategyInterface" => 'vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ActivationStrategyInterface.php',
							"ChannelLevelActivationStrategy" => 'vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php',
							"ErrorLevelActivationStrategy" => 'vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ErrorLevelActivationStrategy.php',
						],
					],
					"Slack" => [
						"_Items" => [
							"SlackRecord" => 'vendor/monolog/monolog/src/Monolog/Handler/Slack/SlackRecord.php',
						],
					],
					"SyslogUdp" => [
						"_Items" => [
							"UdpSocket" => 'vendor/monolog/monolog/src/Monolog/Handler/SyslogUdp/UdpSocket.php',
						],
					],
					"_Items" => [
						"AbstractHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
						"AbstractProcessingHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
						"AbstractSyslogHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/AbstractSyslogHandler.php',
						"AmqpHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/AmqpHandler.php',
						"BrowserConsoleHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/BrowserConsoleHandler.php',
						"BufferHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/BufferHandler.php',
						"ChromePHPHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ChromePHPHandler.php',
						"CouchDBHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php',
						"CubeHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/CubeHandler.php',
						"DeduplicationHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/DeduplicationHandler.php',
						"DoctrineCouchDBHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/DoctrineCouchDBHandler.php',
						"DynamoDbHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/DynamoDbHandler.php',
						"ElasticaHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ElasticaHandler.php',
						"ElasticsearchHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ElasticsearchHandler.php',
						"ErrorLogHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php',
						"FallbackGroupHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FallbackGroupHandler.php',
						"FilterHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FilterHandler.php',
						"FingersCrossedHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FingersCrossedHandler.php',
						"FirePHPHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FirePHPHandler.php',
						"FleepHookHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FleepHookHandler.php',
						"FlowdockHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/FlowdockHandler.php',
						"FormattableHandlerInterface" => 'vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerInterface.php',
						"FormattableHandlerTrait" => 'vendor/monolog/monolog/src/Monolog/Handler/FormattableHandlerTrait.php',
						"GelfHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php',
						"GroupHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/GroupHandler.php',
						"Handler" => 'vendor/monolog/monolog/src/Monolog/Handler/Handler.php',
						"HandlerInterface" => 'vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
						"HandlerWrapper" => 'vendor/monolog/monolog/src/Monolog/Handler/HandlerWrapper.php',
						"IFTTTHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php',
						"InsightOpsHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/InsightOpsHandler.php',
						"LogEntriesHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/LogEntriesHandler.php',
						"LogglyHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php',
						"LogmaticHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/LogmaticHandler.php',
						"MailHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php',
						"MandrillHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php',
						"MissingExtensionException" => 'vendor/monolog/monolog/src/Monolog/Handler/MissingExtensionException.php',
						"MongoDBHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/MongoDBHandler.php',
						"NativeMailerHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/NativeMailerHandler.php',
						"NewRelicHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/NewRelicHandler.php',
						"NoopHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/NoopHandler.php',
						"NullHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php',
						"OverflowHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/OverflowHandler.php',
						"PHPConsoleHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/PHPConsoleHandler.php',
						"ProcessableHandlerInterface" => 'vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerInterface.php',
						"ProcessableHandlerTrait" => 'vendor/monolog/monolog/src/Monolog/Handler/ProcessableHandlerTrait.php',
						"ProcessHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ProcessHandler.php',
						"PsrHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php',
						"PushoverHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/PushoverHandler.php',
						"RedisHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/RedisHandler.php',
						"RollbarHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/RollbarHandler.php',
						"RotatingFileHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
						"SamplingHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SamplingHandler.php',
						"SendGridHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SendGridHandler.php',
						"SlackHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SlackHandler.php',
						"SlackWebhookHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SlackWebhookHandler.php',
						"SocketHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SocketHandler.php',
						"SqsHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SqsHandler.php',
						"StreamHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
						"SwiftMailerHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SwiftMailerHandler.php',
						"SyslogHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SyslogHandler.php',
						"SyslogUdpHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/SyslogUdpHandler.php',
						"TelegramBotHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/TelegramBotHandler.php',
						"TestHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/TestHandler.php',
						"WebRequestRecognizerTrait" => 'vendor/monolog/monolog/src/Monolog/Handler/WebRequestRecognizerTrait.php',
						"WhatFailureGroupHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/WhatFailureGroupHandler.php',
						"ZendMonitorHandler" => 'vendor/monolog/monolog/src/Monolog/Handler/ZendMonitorHandler.php',
					],
				],
				"Processor" => [
					"_Items" => [
						"GitProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/GitProcessor.php',
						"HostnameProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/HostnameProcessor.php',
						"IntrospectionProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/IntrospectionProcessor.php',
						"MemoryPeakUsageProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/MemoryPeakUsageProcessor.php',
						"MemoryProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/MemoryProcessor.php',
						"MemoryUsageProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/MemoryUsageProcessor.php',
						"MercurialProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/MercurialProcessor.php',
						"ProcessIdProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/ProcessIdProcessor.php',
						"ProcessorInterface" => 'vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php',
						"PsrLogMessageProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php',
						"TagProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/TagProcessor.php',
						"UidProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/UidProcessor.php',
						"WebProcessor" => 'vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php',
					],
				],
				"_Items" => [
					"DateTimeImmutable" => 'vendor/monolog/monolog/src/Monolog/DateTimeImmutable.php',
					"ErrorHandler" => 'vendor/monolog/monolog/src/Monolog/ErrorHandler.php',
					"Logger" => 'vendor/monolog/monolog/src/Monolog/Logger.php',
					"Registry" => 'vendor/monolog/monolog/src/Monolog/Registry.php',
					"ResettableInterface" => 'vendor/monolog/monolog/src/Monolog/ResettableInterface.php',
					"SignalHandler" => 'vendor/monolog/monolog/src/Monolog/SignalHandler.php',
					"Utils" => 'vendor/monolog/monolog/src/Monolog/Utils.php',
				],
			],
			"Mpociot" => [
				"Pipeline" => [
					"_Items" => [
						"Pipeline" => 'vendor/mpociot/pipeline/src/Pipeline.php',
					],
				],
				"_Items" => [
				],
			],
			"Opis" => [
				"Closure" => [
					"_Items" => [
						"Analyzer" => 'vendor/opis/closure/src/Analyzer.php',
						"ClosureContext" => 'vendor/opis/closure/src/ClosureContext.php',
						"ClosureScope" => 'vendor/opis/closure/src/ClosureScope.php',
						"ClosureStream" => 'vendor/opis/closure/src/ClosureStream.php',
						"ISecurityProvider" => 'vendor/opis/closure/src/ISecurityProvider.php',
						"ReflectionClosure" => 'vendor/opis/closure/src/ReflectionClosure.php',
						"SecurityException" => 'vendor/opis/closure/src/SecurityException.php',
						"SecurityProvider" => 'vendor/opis/closure/src/SecurityProvider.php',
						"SelfReference" => 'vendor/opis/closure/src/SelfReference.php',
						"SerializableClosure" => 'vendor/opis/closure/src/SerializableClosure.php',
					],
				],
				"_Items" => [
				],
			],
			"PHPHtmlParser" => [
				"Dom" => [
					"_Items" => [
						"AbstractNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/AbstractNode.php',
						"ArrayNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/ArrayNode.php',
						"Collection" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Collection.php',
						"HtmlNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/HtmlNode.php',
						"InnerNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/InnerNode.php',
						"LeafNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/LeafNode.php',
						"Tag" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/Tag.php',
						"TextNode" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom/TextNode.php',
					],
				],
				"Exceptions" => [
					"_Items" => [
						"ChildNotFoundException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ChildNotFoundException.php',
						"CircularException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CircularException.php',
						"CurlException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/CurlException.php',
						"EmptyCollectionException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/EmptyCollectionException.php',
						"NotLoadedException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/NotLoadedException.php',
						"ParentNotFoundException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/ParentNotFoundException.php',
						"StrictException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/StrictException.php',
						"UnknownChildTypeException" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Exceptions/UnknownChildTypeException.php',
					],
				],
				"Selector" => [
					"_Items" => [
						"Parser" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Parser.php',
						"ParserInterface" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Selector/ParserInterface.php',
						"Selector" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Selector/Selector.php',
					],
				],
				"_Items" => [
					"Content" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Content.php',
					"Curl" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Curl.php',
					"CurlInterface" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/CurlInterface.php',
					"Dom" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Dom.php',
					"Finder" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Finder.php',
					"Options" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/Options.php',
					"StaticDom" => 'vendor/paquettg/php-html-parser/src/PHPHtmlParser/StaticDom.php',
				],
			],
			"stringEncode" => [
				"_Items" => [
					"Encode" => 'vendor/paquettg/string-encode/src/stringEncode/Encode.php',
					"Exception" => 'vendor/paquettg/string-encode/src/stringEncode/Exception.php',
				],
			],
			"PHPMailer" => [
				"PHPMailer" => [
					"_Items" => [
						"Exception" => 'vendor/phpmailer/phpmailer/src/Exception.php',
						"OAuth" => 'vendor/phpmailer/phpmailer/src/OAuth.php',
						"PHPMailer" => 'vendor/phpmailer/phpmailer/src/PHPMailer.php',
						"POP3" => 'vendor/phpmailer/phpmailer/src/POP3.php',
						"SMTP" => 'vendor/phpmailer/phpmailer/src/SMTP.php',
					],
				],
				"_Items" => [
				],
			],
			"Psr" => [
				"Container" => [
					"_Items" => [
						"ContainerExceptionInterface" => 'vendor/psr/container/src/ContainerExceptionInterface.php',
						"ContainerInterface" => 'vendor/psr/container/src/ContainerInterface.php',
						"NotFoundExceptionInterface" => 'vendor/psr/container/src/NotFoundExceptionInterface.php',
					],
				],
				"Log" => [
					"_Items" => [
						"AbstractLogger" => 'vendor/psr/log/Psr/Log/AbstractLogger.php',
						"InvalidArgumentException" => 'vendor/psr/log/Psr/Log/InvalidArgumentException.php',
						"LoggerAwareInterface" => 'vendor/psr/log/Psr/Log/LoggerAwareInterface.php',
						"LoggerAwareTrait" => 'vendor/psr/log/Psr/Log/LoggerAwareTrait.php',
						"LoggerInterface" => 'vendor/psr/log/Psr/Log/LoggerInterface.php',
						"LoggerTrait" => 'vendor/psr/log/Psr/Log/LoggerTrait.php',
						"LogLevel" => 'vendor/psr/log/Psr/Log/LogLevel.php',
						"NullLogger" => 'vendor/psr/log/Psr/Log/NullLogger.php',
					],
				],
				"_Items" => [
				],
			],
			"ExecParallel" => [
				"_Items" => [
					"Controller" => 'vendor/ravisorg/exec-parallel/src/Controller.php',
					"Job" => 'vendor/ravisorg/exec-parallel/src/Job.php',
				],
			],
			"React" => [
				"Cache" => [
					"_Items" => [
						"ArrayCache" => 'vendor/react/cache/src/ArrayCache.php',
						"CacheInterface" => 'vendor/react/cache/src/CacheInterface.php',
					],
				],
				"Dns" => [
					"Config" => [
						"_Items" => [
							"Config" => 'vendor/react/dns/src/Config/Config.php',
							"HostsFile" => 'vendor/react/dns/src/Config/HostsFile.php',
						],
					],
					"Model" => [
						"_Items" => [
							"Message" => 'vendor/react/dns/src/Model/Message.php',
							"Record" => 'vendor/react/dns/src/Model/Record.php',
						],
					],
					"Protocol" => [
						"_Items" => [
							"BinaryDumper" => 'vendor/react/dns/src/Protocol/BinaryDumper.php',
							"Parser" => 'vendor/react/dns/src/Protocol/Parser.php',
						],
					],
					"Query" => [
						"_Items" => [
							"CachingExecutor" => 'vendor/react/dns/src/Query/CachingExecutor.php',
							"CancellationException" => 'vendor/react/dns/src/Query/CancellationException.php',
							"CoopExecutor" => 'vendor/react/dns/src/Query/CoopExecutor.php',
							"ExecutorInterface" => 'vendor/react/dns/src/Query/ExecutorInterface.php',
							"HostsFileExecutor" => 'vendor/react/dns/src/Query/HostsFileExecutor.php',
							"Query" => 'vendor/react/dns/src/Query/Query.php',
							"RetryExecutor" => 'vendor/react/dns/src/Query/RetryExecutor.php',
							"SelectiveTransportExecutor" => 'vendor/react/dns/src/Query/SelectiveTransportExecutor.php',
							"TcpTransportExecutor" => 'vendor/react/dns/src/Query/TcpTransportExecutor.php',
							"TimeoutException" => 'vendor/react/dns/src/Query/TimeoutException.php',
							"TimeoutExecutor" => 'vendor/react/dns/src/Query/TimeoutExecutor.php',
							"UdpTransportExecutor" => 'vendor/react/dns/src/Query/UdpTransportExecutor.php',
						],
					],
					"Resolver" => [
						"_Items" => [
							"Factory" => 'vendor/react/dns/src/Resolver/Factory.php',
							"Resolver" => 'vendor/react/dns/src/Resolver/Resolver.php',
							"ResolverInterface" => 'vendor/react/dns/src/Resolver/ResolverInterface.php',
						],
					],
					"_Items" => [
						"BadServerException" => 'vendor/react/dns/src/BadServerException.php',
						"RecordNotFoundException" => 'vendor/react/dns/src/RecordNotFoundException.php',
					],
				],
				"EventLoop" => [
					"Tick" => [
						"_Items" => [
							"FutureTickQueue" => 'vendor/react/event-loop/src/Tick/FutureTickQueue.php',
						],
					],
					"Timer" => [
						"_Items" => [
							"Timer" => 'vendor/react/event-loop/src/Timer/Timer.php',
							"Timers" => 'vendor/react/event-loop/src/Timer/Timers.php',
						],
					],
					"_Items" => [
						"ExtEventLoop" => 'vendor/react/event-loop/src/ExtEventLoop.php',
						"ExtEvLoop" => 'vendor/react/event-loop/src/ExtEvLoop.php',
						"ExtLibeventLoop" => 'vendor/react/event-loop/src/ExtLibeventLoop.php',
						"ExtLibevLoop" => 'vendor/react/event-loop/src/ExtLibevLoop.php',
						"ExtUvLoop" => 'vendor/react/event-loop/src/ExtUvLoop.php',
						"Factory" => 'vendor/react/event-loop/src/Factory.php',
						"LoopInterface" => 'vendor/react/event-loop/src/LoopInterface.php',
						"SignalsHandler" => 'vendor/react/event-loop/src/SignalsHandler.php',
						"StreamSelectLoop" => 'vendor/react/event-loop/src/StreamSelectLoop.php',
						"TimerInterface" => 'vendor/react/event-loop/src/TimerInterface.php',
					],
				],
				"Promise" => [
					"Exception" => [
						"_Items" => [
							"LengthException" => 'vendor/react/promise/src/Exception/LengthException.php',
						],
					],
					"Timer" => [
						"_Items" => [
							"TimeoutException" => 'vendor/react/promise-timer/src/TimeoutException.php',
						],
					],
					"_Items" => [
						"CancellablePromiseInterface" => 'vendor/react/promise/src/CancellablePromiseInterface.php',
						"CancellationQueue" => 'vendor/react/promise/src/CancellationQueue.php',
						"Deferred" => 'vendor/react/promise/src/Deferred.php',
						"ExtendedPromiseInterface" => 'vendor/react/promise/src/ExtendedPromiseInterface.php',
						"FulfilledPromise" => 'vendor/react/promise/src/FulfilledPromise.php',
						"LazyPromise" => 'vendor/react/promise/src/LazyPromise.php',
						"Promise" => 'vendor/react/promise/src/Promise.php',
						"PromiseInterface" => 'vendor/react/promise/src/PromiseInterface.php',
						"PromisorInterface" => 'vendor/react/promise/src/PromisorInterface.php',
						"RejectedPromise" => 'vendor/react/promise/src/RejectedPromise.php',
						"UnhandledRejectionException" => 'vendor/react/promise/src/UnhandledRejectionException.php',
					],
				],
				"Socket" => [
					"_Items" => [
						"Connection" => 'vendor/react/socket/src/Connection.php',
						"ConnectionInterface" => 'vendor/react/socket/src/ConnectionInterface.php',
						"Connector" => 'vendor/react/socket/src/Connector.php',
						"ConnectorInterface" => 'vendor/react/socket/src/ConnectorInterface.php',
						"DnsConnector" => 'vendor/react/socket/src/DnsConnector.php',
						"FixedUriConnector" => 'vendor/react/socket/src/FixedUriConnector.php',
						"LimitingServer" => 'vendor/react/socket/src/LimitingServer.php',
						"SecureConnector" => 'vendor/react/socket/src/SecureConnector.php',
						"SecureServer" => 'vendor/react/socket/src/SecureServer.php',
						"Server" => 'vendor/react/socket/src/Server.php',
						"ServerInterface" => 'vendor/react/socket/src/ServerInterface.php',
						"StreamEncryption" => 'vendor/react/socket/src/StreamEncryption.php',
						"TcpConnector" => 'vendor/react/socket/src/TcpConnector.php',
						"TcpServer" => 'vendor/react/socket/src/TcpServer.php',
						"TimeoutConnector" => 'vendor/react/socket/src/TimeoutConnector.php',
						"UnixConnector" => 'vendor/react/socket/src/UnixConnector.php',
						"UnixServer" => 'vendor/react/socket/src/UnixServer.php',
					],
				],
				"Stream" => [
					"_Items" => [
						"CompositeStream" => 'vendor/react/stream/src/CompositeStream.php',
						"DuplexResourceStream" => 'vendor/react/stream/src/DuplexResourceStream.php',
						"DuplexStreamInterface" => 'vendor/react/stream/src/DuplexStreamInterface.php',
						"ReadableResourceStream" => 'vendor/react/stream/src/ReadableResourceStream.php',
						"ReadableStreamInterface" => 'vendor/react/stream/src/ReadableStreamInterface.php',
						"ThroughStream" => 'vendor/react/stream/src/ThroughStream.php',
						"Util" => 'vendor/react/stream/src/Util.php',
						"WritableResourceStream" => 'vendor/react/stream/src/WritableResourceStream.php',
						"WritableStreamInterface" => 'vendor/react/stream/src/WritableStreamInterface.php',
					],
				],
				"_Items" => [
				],
			],
			"RedLock" => [
				"_Items" => [
					"RedLock" => 'vendor/signe/redlock-php/src/RedLock.php',
				],
			],
			"Spatie" => [
				"Macroable" => [
					"_Items" => [
						"Macroable" => 'vendor/spatie/macroable/src/Macroable.php',
					],
				],
				"_Items" => [
				],
			],
			"Symfony" => [
				"Component" => [
					"Console" => [
						"Command" => [
							"_Items" => [
								"Command" => 'vendor/symfony/console/Command/Command.php',
								"HelpCommand" => 'vendor/symfony/console/Command/HelpCommand.php',
								"ListCommand" => 'vendor/symfony/console/Command/ListCommand.php',
								"LockableTrait" => 'vendor/symfony/console/Command/LockableTrait.php',
							],
						],
						"CommandLoader" => [
							"_Items" => [
								"CommandLoaderInterface" => 'vendor/symfony/console/CommandLoader/CommandLoaderInterface.php',
								"ContainerCommandLoader" => 'vendor/symfony/console/CommandLoader/ContainerCommandLoader.php',
								"FactoryCommandLoader" => 'vendor/symfony/console/CommandLoader/FactoryCommandLoader.php',
							],
						],
						"DependencyInjection" => [
							"_Items" => [
								"AddConsoleCommandPass" => 'vendor/symfony/console/DependencyInjection/AddConsoleCommandPass.php',
							],
						],
						"Descriptor" => [
							"_Items" => [
								"ApplicationDescription" => 'vendor/symfony/console/Descriptor/ApplicationDescription.php',
								"Descriptor" => 'vendor/symfony/console/Descriptor/Descriptor.php',
								"DescriptorInterface" => 'vendor/symfony/console/Descriptor/DescriptorInterface.php',
								"JsonDescriptor" => 'vendor/symfony/console/Descriptor/JsonDescriptor.php',
								"MarkdownDescriptor" => 'vendor/symfony/console/Descriptor/MarkdownDescriptor.php',
								"TextDescriptor" => 'vendor/symfony/console/Descriptor/TextDescriptor.php',
								"XmlDescriptor" => 'vendor/symfony/console/Descriptor/XmlDescriptor.php',
							],
						],
						"Event" => [
							"_Items" => [
								"ConsoleCommandEvent" => 'vendor/symfony/console/Event/ConsoleCommandEvent.php',
								"ConsoleErrorEvent" => 'vendor/symfony/console/Event/ConsoleErrorEvent.php',
								"ConsoleEvent" => 'vendor/symfony/console/Event/ConsoleEvent.php',
								"ConsoleTerminateEvent" => 'vendor/symfony/console/Event/ConsoleTerminateEvent.php',
							],
						],
						"EventListener" => [
							"_Items" => [
								"ErrorListener" => 'vendor/symfony/console/EventListener/ErrorListener.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"CommandNotFoundException" => 'vendor/symfony/console/Exception/CommandNotFoundException.php',
								"ExceptionInterface" => 'vendor/symfony/console/Exception/ExceptionInterface.php',
								"InvalidArgumentException" => 'vendor/symfony/console/Exception/InvalidArgumentException.php',
								"InvalidOptionException" => 'vendor/symfony/console/Exception/InvalidOptionException.php',
								"LogicException" => 'vendor/symfony/console/Exception/LogicException.php',
								"NamespaceNotFoundException" => 'vendor/symfony/console/Exception/NamespaceNotFoundException.php',
								"RuntimeException" => 'vendor/symfony/console/Exception/RuntimeException.php',
							],
						],
						"Formatter" => [
							"_Items" => [
								"OutputFormatter" => 'vendor/symfony/console/Formatter/OutputFormatter.php',
								"OutputFormatterInterface" => 'vendor/symfony/console/Formatter/OutputFormatterInterface.php',
								"OutputFormatterStyle" => 'vendor/symfony/console/Formatter/OutputFormatterStyle.php',
								"OutputFormatterStyleInterface" => 'vendor/symfony/console/Formatter/OutputFormatterStyleInterface.php',
								"OutputFormatterStyleStack" => 'vendor/symfony/console/Formatter/OutputFormatterStyleStack.php',
								"WrappableOutputFormatterInterface" => 'vendor/symfony/console/Formatter/WrappableOutputFormatterInterface.php',
							],
						],
						"Helper" => [
							"_Items" => [
								"DebugFormatterHelper" => 'vendor/symfony/console/Helper/DebugFormatterHelper.php',
								"DescriptorHelper" => 'vendor/symfony/console/Helper/DescriptorHelper.php',
								"Dumper" => 'vendor/symfony/console/Helper/Dumper.php',
								"FormatterHelper" => 'vendor/symfony/console/Helper/FormatterHelper.php',
								"Helper" => 'vendor/symfony/console/Helper/Helper.php',
								"HelperInterface" => 'vendor/symfony/console/Helper/HelperInterface.php',
								"HelperSet" => 'vendor/symfony/console/Helper/HelperSet.php',
								"InputAwareHelper" => 'vendor/symfony/console/Helper/InputAwareHelper.php',
								"ProcessHelper" => 'vendor/symfony/console/Helper/ProcessHelper.php',
								"ProgressBar" => 'vendor/symfony/console/Helper/ProgressBar.php',
								"ProgressIndicator" => 'vendor/symfony/console/Helper/ProgressIndicator.php',
								"QuestionHelper" => 'vendor/symfony/console/Helper/QuestionHelper.php',
								"SymfonyQuestionHelper" => 'vendor/symfony/console/Helper/SymfonyQuestionHelper.php',
								"Table" => 'vendor/symfony/console/Helper/Table.php',
								"TableCell" => 'vendor/symfony/console/Helper/TableCell.php',
								"TableRows" => 'vendor/symfony/console/Helper/TableRows.php',
								"TableSeparator" => 'vendor/symfony/console/Helper/TableSeparator.php',
								"TableStyle" => 'vendor/symfony/console/Helper/TableStyle.php',
							],
						],
						"Input" => [
							"_Items" => [
								"ArgvInput" => 'vendor/symfony/console/Input/ArgvInput.php',
								"ArrayInput" => 'vendor/symfony/console/Input/ArrayInput.php',
								"Input" => 'vendor/symfony/console/Input/Input.php',
								"InputArgument" => 'vendor/symfony/console/Input/InputArgument.php',
								"InputAwareInterface" => 'vendor/symfony/console/Input/InputAwareInterface.php',
								"InputDefinition" => 'vendor/symfony/console/Input/InputDefinition.php',
								"InputInterface" => 'vendor/symfony/console/Input/InputInterface.php',
								"InputOption" => 'vendor/symfony/console/Input/InputOption.php',
								"StreamableInputInterface" => 'vendor/symfony/console/Input/StreamableInputInterface.php',
								"StringInput" => 'vendor/symfony/console/Input/StringInput.php',
							],
						],
						"Logger" => [
							"_Items" => [
								"ConsoleLogger" => 'vendor/symfony/console/Logger/ConsoleLogger.php',
							],
						],
						"Output" => [
							"_Items" => [
								"BufferedOutput" => 'vendor/symfony/console/Output/BufferedOutput.php',
								"ConsoleOutput" => 'vendor/symfony/console/Output/ConsoleOutput.php',
								"ConsoleOutputInterface" => 'vendor/symfony/console/Output/ConsoleOutputInterface.php',
								"ConsoleSectionOutput" => 'vendor/symfony/console/Output/ConsoleSectionOutput.php',
								"NullOutput" => 'vendor/symfony/console/Output/NullOutput.php',
								"Output" => 'vendor/symfony/console/Output/Output.php',
								"OutputInterface" => 'vendor/symfony/console/Output/OutputInterface.php',
								"StreamOutput" => 'vendor/symfony/console/Output/StreamOutput.php',
							],
						],
						"Question" => [
							"_Items" => [
								"ChoiceQuestion" => 'vendor/symfony/console/Question/ChoiceQuestion.php',
								"ConfirmationQuestion" => 'vendor/symfony/console/Question/ConfirmationQuestion.php',
								"Question" => 'vendor/symfony/console/Question/Question.php',
							],
						],
						"Style" => [
							"_Items" => [
								"OutputStyle" => 'vendor/symfony/console/Style/OutputStyle.php',
								"StyleInterface" => 'vendor/symfony/console/Style/StyleInterface.php',
								"SymfonyStyle" => 'vendor/symfony/console/Style/SymfonyStyle.php',
							],
						],
						"Tester" => [
							"_Items" => [
								"ApplicationTester" => 'vendor/symfony/console/Tester/ApplicationTester.php',
								"CommandTester" => 'vendor/symfony/console/Tester/CommandTester.php',
								"TesterTrait" => 'vendor/symfony/console/Tester/TesterTrait.php',
							],
						],
						"_Items" => [
							"Application" => 'vendor/symfony/console/Application.php',
							"ConsoleEvents" => 'vendor/symfony/console/ConsoleEvents.php',
							"Terminal" => 'vendor/symfony/console/Terminal.php',
						],
					],
					"CssSelector" => [
						"Exception" => [
							"_Items" => [
								"ExceptionInterface" => 'vendor/symfony/css-selector/Exception/ExceptionInterface.php',
								"ExpressionErrorException" => 'vendor/symfony/css-selector/Exception/ExpressionErrorException.php',
								"InternalErrorException" => 'vendor/symfony/css-selector/Exception/InternalErrorException.php',
								"ParseException" => 'vendor/symfony/css-selector/Exception/ParseException.php',
								"SyntaxErrorException" => 'vendor/symfony/css-selector/Exception/SyntaxErrorException.php',
							],
						],
						"Node" => [
							"_Items" => [
								"AbstractNode" => 'vendor/symfony/css-selector/Node/AbstractNode.php',
								"AttributeNode" => 'vendor/symfony/css-selector/Node/AttributeNode.php',
								"ClassNode" => 'vendor/symfony/css-selector/Node/ClassNode.php',
								"CombinedSelectorNode" => 'vendor/symfony/css-selector/Node/CombinedSelectorNode.php',
								"ElementNode" => 'vendor/symfony/css-selector/Node/ElementNode.php',
								"FunctionNode" => 'vendor/symfony/css-selector/Node/FunctionNode.php',
								"HashNode" => 'vendor/symfony/css-selector/Node/HashNode.php',
								"NegationNode" => 'vendor/symfony/css-selector/Node/NegationNode.php',
								"NodeInterface" => 'vendor/symfony/css-selector/Node/NodeInterface.php',
								"PseudoNode" => 'vendor/symfony/css-selector/Node/PseudoNode.php',
								"SelectorNode" => 'vendor/symfony/css-selector/Node/SelectorNode.php',
								"Specificity" => 'vendor/symfony/css-selector/Node/Specificity.php',
							],
						],
						"Parser" => [
							"Handler" => [
								"_Items" => [
									"CommentHandler" => 'vendor/symfony/css-selector/Parser/Handler/CommentHandler.php',
									"HandlerInterface" => 'vendor/symfony/css-selector/Parser/Handler/HandlerInterface.php',
									"HashHandler" => 'vendor/symfony/css-selector/Parser/Handler/HashHandler.php',
									"IdentifierHandler" => 'vendor/symfony/css-selector/Parser/Handler/IdentifierHandler.php',
									"NumberHandler" => 'vendor/symfony/css-selector/Parser/Handler/NumberHandler.php',
									"StringHandler" => 'vendor/symfony/css-selector/Parser/Handler/StringHandler.php',
									"WhitespaceHandler" => 'vendor/symfony/css-selector/Parser/Handler/WhitespaceHandler.php',
								],
							],
							"Shortcut" => [
								"_Items" => [
									"ClassParser" => 'vendor/symfony/css-selector/Parser/Shortcut/ClassParser.php',
									"ElementParser" => 'vendor/symfony/css-selector/Parser/Shortcut/ElementParser.php',
									"EmptyStringParser" => 'vendor/symfony/css-selector/Parser/Shortcut/EmptyStringParser.php',
									"HashParser" => 'vendor/symfony/css-selector/Parser/Shortcut/HashParser.php',
								],
							],
							"Tokenizer" => [
								"_Items" => [
									"Tokenizer" => 'vendor/symfony/css-selector/Parser/Tokenizer/Tokenizer.php',
									"TokenizerEscaping" => 'vendor/symfony/css-selector/Parser/Tokenizer/TokenizerEscaping.php',
									"TokenizerPatterns" => 'vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php',
								],
							],
							"_Items" => [
								"Parser" => 'vendor/symfony/css-selector/Parser/Parser.php',
								"ParserInterface" => 'vendor/symfony/css-selector/Parser/ParserInterface.php',
								"Reader" => 'vendor/symfony/css-selector/Parser/Reader.php',
								"Token" => 'vendor/symfony/css-selector/Parser/Token.php',
								"TokenStream" => 'vendor/symfony/css-selector/Parser/TokenStream.php',
							],
						],
						"XPath" => [
							"Extension" => [
								"_Items" => [
									"AbstractExtension" => 'vendor/symfony/css-selector/XPath/Extension/AbstractExtension.php',
									"AttributeMatchingExtension" => 'vendor/symfony/css-selector/XPath/Extension/AttributeMatchingExtension.php',
									"CombinationExtension" => 'vendor/symfony/css-selector/XPath/Extension/CombinationExtension.php',
									"ExtensionInterface" => 'vendor/symfony/css-selector/XPath/Extension/ExtensionInterface.php',
									"FunctionExtension" => 'vendor/symfony/css-selector/XPath/Extension/FunctionExtension.php',
									"HtmlExtension" => 'vendor/symfony/css-selector/XPath/Extension/HtmlExtension.php',
									"NodeExtension" => 'vendor/symfony/css-selector/XPath/Extension/NodeExtension.php',
									"PseudoClassExtension" => 'vendor/symfony/css-selector/XPath/Extension/PseudoClassExtension.php',
								],
							],
							"_Items" => [
								"Translator" => 'vendor/symfony/css-selector/XPath/Translator.php',
								"TranslatorInterface" => 'vendor/symfony/css-selector/XPath/TranslatorInterface.php',
								"XPathExpr" => 'vendor/symfony/css-selector/XPath/XPathExpr.php',
							],
						],
						"_Items" => [
							"CssSelectorConverter" => 'vendor/symfony/css-selector/CssSelectorConverter.php',
						],
					],
					"HttpFoundation" => [
						"Exception" => [
							"_Items" => [
								"ConflictingHeadersException" => 'vendor/symfony/http-foundation/Exception/ConflictingHeadersException.php',
								"RequestExceptionInterface" => 'vendor/symfony/http-foundation/Exception/RequestExceptionInterface.php',
								"SuspiciousOperationException" => 'vendor/symfony/http-foundation/Exception/SuspiciousOperationException.php',
							],
						],
						"File" => [
							"Exception" => [
								"_Items" => [
									"AccessDeniedException" => 'vendor/symfony/http-foundation/File/Exception/AccessDeniedException.php',
									"CannotWriteFileException" => 'vendor/symfony/http-foundation/File/Exception/CannotWriteFileException.php',
									"ExtensionFileException" => 'vendor/symfony/http-foundation/File/Exception/ExtensionFileException.php',
									"FileException" => 'vendor/symfony/http-foundation/File/Exception/FileException.php',
									"FileNotFoundException" => 'vendor/symfony/http-foundation/File/Exception/FileNotFoundException.php',
									"FormSizeFileException" => 'vendor/symfony/http-foundation/File/Exception/FormSizeFileException.php',
									"IniSizeFileException" => 'vendor/symfony/http-foundation/File/Exception/IniSizeFileException.php',
									"NoFileException" => 'vendor/symfony/http-foundation/File/Exception/NoFileException.php',
									"NoTmpDirFileException" => 'vendor/symfony/http-foundation/File/Exception/NoTmpDirFileException.php',
									"PartialFileException" => 'vendor/symfony/http-foundation/File/Exception/PartialFileException.php',
									"UnexpectedTypeException" => 'vendor/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
									"UploadException" => 'vendor/symfony/http-foundation/File/Exception/UploadException.php',
								],
							],
							"MimeType" => [
								"_Items" => [
									"ExtensionGuesser" => 'vendor/symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
									"ExtensionGuesserInterface" => 'vendor/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
									"FileBinaryMimeTypeGuesser" => 'vendor/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
									"FileinfoMimeTypeGuesser" => 'vendor/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
									"MimeTypeExtensionGuesser" => 'vendor/symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
									"MimeTypeGuesser" => 'vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
									"MimeTypeGuesserInterface" => 'vendor/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
								],
							],
							"_Items" => [
								"File" => 'vendor/symfony/http-foundation/File/File.php',
								"Stream" => 'vendor/symfony/http-foundation/File/Stream.php',
								"UploadedFile" => 'vendor/symfony/http-foundation/File/UploadedFile.php',
							],
						],
						"Session" => [
							"Attribute" => [
								"_Items" => [
									"AttributeBag" => 'vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php',
									"AttributeBagInterface" => 'vendor/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
									"NamespacedAttributeBag" => 'vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
								],
							],
							"Flash" => [
								"_Items" => [
									"AutoExpireFlashBag" => 'vendor/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
									"FlashBag" => 'vendor/symfony/http-foundation/Session/Flash/FlashBag.php',
									"FlashBagInterface" => 'vendor/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
								],
							],
							"Storage" => [
								"Handler" => [
									"_Items" => [
										"AbstractSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/AbstractSessionHandler.php',
										"MemcachedSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
										"MigratingSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php',
										"MongoDbSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
										"NativeFileSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
										"NullSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
										"PdoSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
										"RedisSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/RedisSessionHandler.php',
										"StrictSessionHandler" => 'vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php',
									],
								],
								"Proxy" => [
									"_Items" => [
										"AbstractProxy" => 'vendor/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
										"SessionHandlerProxy" => 'vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
									],
								],
								"_Items" => [
									"MetadataBag" => 'vendor/symfony/http-foundation/Session/Storage/MetadataBag.php',
									"MockArraySessionStorage" => 'vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
									"MockFileSessionStorage" => 'vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
									"NativeSessionStorage" => 'vendor/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
									"PhpBridgeSessionStorage" => 'vendor/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
									"SessionStorageInterface" => 'vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
								],
							],
							"_Items" => [
								"Session" => 'vendor/symfony/http-foundation/Session/Session.php',
								"SessionBagInterface" => 'vendor/symfony/http-foundation/Session/SessionBagInterface.php',
								"SessionBagProxy" => 'vendor/symfony/http-foundation/Session/SessionBagProxy.php',
								"SessionInterface" => 'vendor/symfony/http-foundation/Session/SessionInterface.php',
								"SessionUtils" => 'vendor/symfony/http-foundation/Session/SessionUtils.php',
							],
						],
						"_Items" => [
							"AcceptHeader" => 'vendor/symfony/http-foundation/AcceptHeader.php',
							"AcceptHeaderItem" => 'vendor/symfony/http-foundation/AcceptHeaderItem.php',
							"ApacheRequest" => 'vendor/symfony/http-foundation/ApacheRequest.php',
							"BinaryFileResponse" => 'vendor/symfony/http-foundation/BinaryFileResponse.php',
							"Cookie" => 'vendor/symfony/http-foundation/Cookie.php',
							"ExpressionRequestMatcher" => 'vendor/symfony/http-foundation/ExpressionRequestMatcher.php',
							"FileBag" => 'vendor/symfony/http-foundation/FileBag.php',
							"HeaderBag" => 'vendor/symfony/http-foundation/HeaderBag.php',
							"HeaderUtils" => 'vendor/symfony/http-foundation/HeaderUtils.php',
							"IpUtils" => 'vendor/symfony/http-foundation/IpUtils.php',
							"JsonResponse" => 'vendor/symfony/http-foundation/JsonResponse.php',
							"ParameterBag" => 'vendor/symfony/http-foundation/ParameterBag.php',
							"RedirectResponse" => 'vendor/symfony/http-foundation/RedirectResponse.php',
							"Request" => 'vendor/symfony/http-foundation/Request.php',
							"RequestMatcher" => 'vendor/symfony/http-foundation/RequestMatcher.php',
							"RequestMatcherInterface" => 'vendor/symfony/http-foundation/RequestMatcherInterface.php',
							"RequestStack" => 'vendor/symfony/http-foundation/RequestStack.php',
							"Response" => 'vendor/symfony/http-foundation/Response.php',
							"ResponseHeaderBag" => 'vendor/symfony/http-foundation/ResponseHeaderBag.php',
							"ServerBag" => 'vendor/symfony/http-foundation/ServerBag.php',
							"StreamedResponse" => 'vendor/symfony/http-foundation/StreamedResponse.php',
							"UrlHelper" => 'vendor/symfony/http-foundation/UrlHelper.php',
						],
					],
					"Mime" => [
						"DependencyInjection" => [
							"_Items" => [
								"AddMimeTypeGuesserPass" => 'vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php',
							],
						],
						"Encoder" => [
							"_Items" => [
								"AddressEncoderInterface" => 'vendor/symfony/mime/Encoder/AddressEncoderInterface.php',
								"Base64ContentEncoder" => 'vendor/symfony/mime/Encoder/Base64ContentEncoder.php',
								"Base64Encoder" => 'vendor/symfony/mime/Encoder/Base64Encoder.php',
								"Base64MimeHeaderEncoder" => 'vendor/symfony/mime/Encoder/Base64MimeHeaderEncoder.php',
								"ContentEncoderInterface" => 'vendor/symfony/mime/Encoder/ContentEncoderInterface.php',
								"EightBitContentEncoder" => 'vendor/symfony/mime/Encoder/EightBitContentEncoder.php',
								"EncoderInterface" => 'vendor/symfony/mime/Encoder/EncoderInterface.php',
								"IdnAddressEncoder" => 'vendor/symfony/mime/Encoder/IdnAddressEncoder.php',
								"MimeHeaderEncoderInterface" => 'vendor/symfony/mime/Encoder/MimeHeaderEncoderInterface.php',
								"QpContentEncoder" => 'vendor/symfony/mime/Encoder/QpContentEncoder.php',
								"QpEncoder" => 'vendor/symfony/mime/Encoder/QpEncoder.php',
								"QpMimeHeaderEncoder" => 'vendor/symfony/mime/Encoder/QpMimeHeaderEncoder.php',
								"Rfc2231Encoder" => 'vendor/symfony/mime/Encoder/Rfc2231Encoder.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"AddressEncoderException" => 'vendor/symfony/mime/Exception/AddressEncoderException.php',
								"ExceptionInterface" => 'vendor/symfony/mime/Exception/ExceptionInterface.php',
								"InvalidArgumentException" => 'vendor/symfony/mime/Exception/InvalidArgumentException.php',
								"LogicException" => 'vendor/symfony/mime/Exception/LogicException.php',
								"RfcComplianceException" => 'vendor/symfony/mime/Exception/RfcComplianceException.php',
								"RuntimeException" => 'vendor/symfony/mime/Exception/RuntimeException.php',
							],
						],
						"Header" => [
							"_Items" => [
								"AbstractHeader" => 'vendor/symfony/mime/Header/AbstractHeader.php',
								"DateHeader" => 'vendor/symfony/mime/Header/DateHeader.php',
								"HeaderInterface" => 'vendor/symfony/mime/Header/HeaderInterface.php',
								"Headers" => 'vendor/symfony/mime/Header/Headers.php',
								"IdentificationHeader" => 'vendor/symfony/mime/Header/IdentificationHeader.php',
								"MailboxHeader" => 'vendor/symfony/mime/Header/MailboxHeader.php',
								"MailboxListHeader" => 'vendor/symfony/mime/Header/MailboxListHeader.php',
								"ParameterizedHeader" => 'vendor/symfony/mime/Header/ParameterizedHeader.php',
								"PathHeader" => 'vendor/symfony/mime/Header/PathHeader.php',
								"UnstructuredHeader" => 'vendor/symfony/mime/Header/UnstructuredHeader.php',
							],
						],
						"Part" => [
							"Multipart" => [
								"_Items" => [
									"AlternativePart" => 'vendor/symfony/mime/Part/Multipart/AlternativePart.php',
									"DigestPart" => 'vendor/symfony/mime/Part/Multipart/DigestPart.php',
									"FormDataPart" => 'vendor/symfony/mime/Part/Multipart/FormDataPart.php',
									"MixedPart" => 'vendor/symfony/mime/Part/Multipart/MixedPart.php',
									"RelatedPart" => 'vendor/symfony/mime/Part/Multipart/RelatedPart.php',
								],
							],
							"_Items" => [
								"AbstractMultipartPart" => 'vendor/symfony/mime/Part/AbstractMultipartPart.php',
								"AbstractPart" => 'vendor/symfony/mime/Part/AbstractPart.php',
								"DataPart" => 'vendor/symfony/mime/Part/DataPart.php',
								"MessagePart" => 'vendor/symfony/mime/Part/MessagePart.php',
								"TextPart" => 'vendor/symfony/mime/Part/TextPart.php',
							],
						],
						"_Items" => [
							"Address" => 'vendor/symfony/mime/Address.php',
							"BodyRendererInterface" => 'vendor/symfony/mime/BodyRendererInterface.php',
							"CharacterStream" => 'vendor/symfony/mime/CharacterStream.php',
							"Email" => 'vendor/symfony/mime/Email.php',
							"FileBinaryMimeTypeGuesser" => 'vendor/symfony/mime/FileBinaryMimeTypeGuesser.php',
							"FileinfoMimeTypeGuesser" => 'vendor/symfony/mime/FileinfoMimeTypeGuesser.php',
							"Message" => 'vendor/symfony/mime/Message.php',
							"MessageConverter" => 'vendor/symfony/mime/MessageConverter.php',
							"MimeTypeGuesserInterface" => 'vendor/symfony/mime/MimeTypeGuesserInterface.php',
							"MimeTypes" => 'vendor/symfony/mime/MimeTypes.php',
							"MimeTypesInterface" => 'vendor/symfony/mime/MimeTypesInterface.php',
							"NamedAddress" => 'vendor/symfony/mime/NamedAddress.php',
							"RawMessage" => 'vendor/symfony/mime/RawMessage.php',
						],
					],
					"VarDumper" => [
						"Caster" => [
							"_Items" => [
								"AmqpCaster" => 'vendor/symfony/var-dumper/Caster/AmqpCaster.php',
								"ArgsStub" => 'vendor/symfony/var-dumper/Caster/ArgsStub.php',
								"Caster" => 'vendor/symfony/var-dumper/Caster/Caster.php',
								"ClassStub" => 'vendor/symfony/var-dumper/Caster/ClassStub.php',
								"ConstStub" => 'vendor/symfony/var-dumper/Caster/ConstStub.php',
								"CutArrayStub" => 'vendor/symfony/var-dumper/Caster/CutArrayStub.php',
								"CutStub" => 'vendor/symfony/var-dumper/Caster/CutStub.php',
								"DateCaster" => 'vendor/symfony/var-dumper/Caster/DateCaster.php',
								"DoctrineCaster" => 'vendor/symfony/var-dumper/Caster/DoctrineCaster.php',
								"DOMCaster" => 'vendor/symfony/var-dumper/Caster/DOMCaster.php',
								"DsCaster" => 'vendor/symfony/var-dumper/Caster/DsCaster.php',
								"DsPairStub" => 'vendor/symfony/var-dumper/Caster/DsPairStub.php',
								"EnumStub" => 'vendor/symfony/var-dumper/Caster/EnumStub.php',
								"ExceptionCaster" => 'vendor/symfony/var-dumper/Caster/ExceptionCaster.php',
								"FrameStub" => 'vendor/symfony/var-dumper/Caster/FrameStub.php',
								"GmpCaster" => 'vendor/symfony/var-dumper/Caster/GmpCaster.php',
								"IntlCaster" => 'vendor/symfony/var-dumper/Caster/IntlCaster.php',
								"LinkStub" => 'vendor/symfony/var-dumper/Caster/LinkStub.php',
								"MemcachedCaster" => 'vendor/symfony/var-dumper/Caster/MemcachedCaster.php',
								"PdoCaster" => 'vendor/symfony/var-dumper/Caster/PdoCaster.php',
								"PgSqlCaster" => 'vendor/symfony/var-dumper/Caster/PgSqlCaster.php',
								"ProxyManagerCaster" => 'vendor/symfony/var-dumper/Caster/ProxyManagerCaster.php',
								"RedisCaster" => 'vendor/symfony/var-dumper/Caster/RedisCaster.php',
								"ReflectionCaster" => 'vendor/symfony/var-dumper/Caster/ReflectionCaster.php',
								"ResourceCaster" => 'vendor/symfony/var-dumper/Caster/ResourceCaster.php',
								"SplCaster" => 'vendor/symfony/var-dumper/Caster/SplCaster.php',
								"StubCaster" => 'vendor/symfony/var-dumper/Caster/StubCaster.php',
								"SymfonyCaster" => 'vendor/symfony/var-dumper/Caster/SymfonyCaster.php',
								"TraceStub" => 'vendor/symfony/var-dumper/Caster/TraceStub.php',
								"XmlReaderCaster" => 'vendor/symfony/var-dumper/Caster/XmlReaderCaster.php',
								"XmlResourceCaster" => 'vendor/symfony/var-dumper/Caster/XmlResourceCaster.php',
							],
						],
						"Cloner" => [
							"_Items" => [
								"AbstractCloner" => 'vendor/symfony/var-dumper/Cloner/AbstractCloner.php',
								"ClonerInterface" => 'vendor/symfony/var-dumper/Cloner/ClonerInterface.php',
								"Cursor" => 'vendor/symfony/var-dumper/Cloner/Cursor.php',
								"Data" => 'vendor/symfony/var-dumper/Cloner/Data.php',
								"DumperInterface" => 'vendor/symfony/var-dumper/Cloner/DumperInterface.php',
								"Stub" => 'vendor/symfony/var-dumper/Cloner/Stub.php',
								"VarCloner" => 'vendor/symfony/var-dumper/Cloner/VarCloner.php',
							],
						],
						"Command" => [
							"Descriptor" => [
								"_Items" => [
									"CliDescriptor" => 'vendor/symfony/var-dumper/Command/Descriptor/CliDescriptor.php',
									"DumpDescriptorInterface" => 'vendor/symfony/var-dumper/Command/Descriptor/DumpDescriptorInterface.php',
									"HtmlDescriptor" => 'vendor/symfony/var-dumper/Command/Descriptor/HtmlDescriptor.php',
								],
							],
							"_Items" => [
								"ServerDumpCommand" => 'vendor/symfony/var-dumper/Command/ServerDumpCommand.php',
							],
						],
						"Dumper" => [
							"ContextProvider" => [
								"_Items" => [
									"CliContextProvider" => 'vendor/symfony/var-dumper/Dumper/ContextProvider/CliContextProvider.php',
									"ContextProviderInterface" => 'vendor/symfony/var-dumper/Dumper/ContextProvider/ContextProviderInterface.php',
									"RequestContextProvider" => 'vendor/symfony/var-dumper/Dumper/ContextProvider/RequestContextProvider.php',
									"SourceContextProvider" => 'vendor/symfony/var-dumper/Dumper/ContextProvider/SourceContextProvider.php',
								],
							],
							"_Items" => [
								"AbstractDumper" => 'vendor/symfony/var-dumper/Dumper/AbstractDumper.php',
								"CliDumper" => 'vendor/symfony/var-dumper/Dumper/CliDumper.php',
								"DataDumperInterface" => 'vendor/symfony/var-dumper/Dumper/DataDumperInterface.php',
								"HtmlDumper" => 'vendor/symfony/var-dumper/Dumper/HtmlDumper.php',
								"ServerDumper" => 'vendor/symfony/var-dumper/Dumper/ServerDumper.php',
							],
						],
						"Exception" => [
							"_Items" => [
								"ThrowingCasterException" => 'vendor/symfony/var-dumper/Exception/ThrowingCasterException.php',
							],
						],
						"Server" => [
							"_Items" => [
								"Connection" => 'vendor/symfony/var-dumper/Server/Connection.php',
								"DumpServer" => 'vendor/symfony/var-dumper/Server/DumpServer.php',
							],
						],
						"_Items" => [
							"VarDumper" => 'vendor/symfony/var-dumper/VarDumper.php',
						],
					],
					"Yaml" => [
						"Exception" => [
							"_Items" => [
								"DumpException" => 'vendor/symfony/yaml/Exception/DumpException.php',
								"ExceptionInterface" => 'vendor/symfony/yaml/Exception/ExceptionInterface.php',
								"ParseException" => 'vendor/symfony/yaml/Exception/ParseException.php',
								"RuntimeException" => 'vendor/symfony/yaml/Exception/RuntimeException.php',
							],
						],
						"_Items" => [
							"Dumper" => 'vendor/symfony/yaml/Dumper.php',
							"Escaper" => 'vendor/symfony/yaml/Escaper.php',
							"Inline" => 'vendor/symfony/yaml/Inline.php',
							"Parser" => 'vendor/symfony/yaml/Parser.php',
							"Unescaper" => 'vendor/symfony/yaml/Unescaper.php',
							"Yaml" => 'vendor/symfony/yaml/Yaml.php',
						],
					],
					"_Items" => [
					],
				],
				"Polyfill" => [
					"Ctype" => [
						"_Items" => [
							"Ctype" => 'vendor/symfony/polyfill-ctype/Ctype.php',
						],
					],
					"Intl" => [
						"Idn" => [
							"_Items" => [
								"Idn" => 'vendor/symfony/polyfill-intl-idn/Idn.php',
							],
						],
						"_Items" => [
						],
					],
					"Mbstring" => [
						"_Items" => [
							"Mbstring" => 'vendor/symfony/polyfill-mbstring/Mbstring.php',
						],
					],
					"Php72" => [
						"_Items" => [
							"Php72" => 'vendor/symfony/polyfill-php72/Php72.php',
						],
					],
					"Php73" => [
						"_Items" => [
							"Php73" => 'vendor/symfony/polyfill-php73/Php73.php',
						],
					],
					"_Items" => [
					],
				],
				"Contracts" => [
					"Service" => [
						"_Items" => [
							"ResetInterface" => 'vendor/symfony/service-contracts/ResetInterface.php',
							"ServiceLocatorTrait" => 'vendor/symfony/service-contracts/ServiceLocatorTrait.php',
							"ServiceProviderInterface" => 'vendor/symfony/service-contracts/ServiceProviderInterface.php',
							"ServiceSubscriberInterface" => 'vendor/symfony/service-contracts/ServiceSubscriberInterface.php',
							"ServiceSubscriberTrait" => 'vendor/symfony/service-contracts/ServiceSubscriberTrait.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"Tightenco" => [
				"Collect" => [
					"Contracts" => [
						"Support" => [
							"_Items" => [
								"Arrayable" => 'vendor/tightenco/collect/src/Collect/Contracts/Support/Arrayable.php',
								"Htmlable" => 'vendor/tightenco/collect/src/Collect/Contracts/Support/Htmlable.php',
								"Jsonable" => 'vendor/tightenco/collect/src/Collect/Contracts/Support/Jsonable.php',
							],
						],
						"_Items" => [
						],
					],
					"Support" => [
						"Traits" => [
							"_Items" => [
								"Macroable" => 'vendor/tightenco/collect/src/Collect/Support/Traits/Macroable.php',
							],
						],
						"_Items" => [
							"Arr" => 'vendor/tightenco/collect/src/Collect/Support/Arr.php',
							"Collection" => 'vendor/tightenco/collect/src/Collect/Support/Collection.php',
							"HigherOrderCollectionProxy" => 'vendor/tightenco/collect/src/Collect/Support/HigherOrderCollectionProxy.php',
							"HtmlString" => 'vendor/tightenco/collect/src/Collect/Support/HtmlString.php',
						],
					],
					"_Items" => [
					],
				],
				"_Items" => [
				],
			],
			"TijsVerkoyen" => [
				"CssToInlineStyles" => [
					"Css" => [
						"Property" => [
							"_Items" => [
								"Processor" => 'vendor/tijsverkoyen/css-to-inline-styles/src/Css/Property/Processor.php',
								"Property" => 'vendor/tijsverkoyen/css-to-inline-styles/src/Css/Property/Property.php',
							],
						],
						"Rule" => [
							"_Items" => [
								"Processor" => 'vendor/tijsverkoyen/css-to-inline-styles/src/Css/Rule/Processor.php',
								"Rule" => 'vendor/tijsverkoyen/css-to-inline-styles/src/Css/Rule/Rule.php',
							],
						],
						"_Items" => [
							"Processor" => 'vendor/tijsverkoyen/css-to-inline-styles/src/Css/Processor.php',
						],
					],
					"_Items" => [
						"CssToInlineStyles" => 'vendor/tijsverkoyen/css-to-inline-styles/src/CssToInlineStyles.php',
					],
				],
				"_Items" => [
				],
			],
			"Tivie" => [
				"Command" => [
					"Exception" => [
						"_Items" => [
							"DomainException" => 'vendor/tivie/command/src/Exception/DomainException.php',
							"Exception" => 'vendor/tivie/command/src/Exception/Exception.php',
							"InvalidArgumentException" => 'vendor/tivie/command/src/Exception/InvalidArgumentException.php',
						],
					],
					"_Items" => [
						"Argument" => 'vendor/tivie/command/src/Argument.php',
						"Chain" => 'vendor/tivie/command/src/Chain.php',
						"Command" => 'vendor/tivie/command/src/Command.php',
						"Result" => 'vendor/tivie/command/src/Result.php',
					],
				],
				"OS" => [
					"_Items" => [
						"Detector" => 'vendor/tivie/php-os-detector/src/Detector.php',
						"DetectorInterface" => 'vendor/tivie/php-os-detector/src/DetectorInterface.php',
					],
				],
				"_Items" => [
				],
			],
			"_Items" => [
				"ha" => 'framework/hahaha/ha/ha.php',
				"ComposerAutoloaderInited52258c47506bb06cd8d32fdf88156a" => 'vendor/composer/autoload_real.php',
				"LINEBotTiny" => 'vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php',
				"Swift_Attachment" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Attachment.php',
				"Swift_ByteStream_AbstractFilterableInputStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/AbstractFilterableInputStream.php',
				"Swift_ByteStream_ArrayByteStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/ArrayByteStream.php',
				"Swift_ByteStream_FileByteStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/FileByteStream.php',
				"Swift_ByteStream_TemporaryFileByteStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php',
				"Swift_CharacterReader_GenericFixedWidthReader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/GenericFixedWidthReader.php',
				"Swift_CharacterReader_UsAsciiReader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/UsAsciiReader.php',
				"Swift_CharacterReader_Utf8Reader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader/Utf8Reader.php',
				"Swift_CharacterReader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReader.php',
				"Swift_CharacterReaderFactory_SimpleCharacterReaderFactory" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php',
				"Swift_CharacterReaderFactory" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory.php',
				"Swift_CharacterStream_ArrayCharacterStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream/ArrayCharacterStream.php',
				"Swift_CharacterStream_NgCharacterStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream/NgCharacterStream.php',
				"Swift_CharacterStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterStream.php',
				"Swift_ConfigurableSpool" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ConfigurableSpool.php',
				"Swift_DependencyContainer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/DependencyContainer.php',
				"Swift_DependencyException" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/DependencyException.php',
				"Swift_EmbeddedFile" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/EmbeddedFile.php',
				"Swift_Encoder_Base64Encoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Base64Encoder.php',
				"Swift_Encoder_QpEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/QpEncoder.php',
				"Swift_Encoder_Rfc2231Encoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder/Rfc2231Encoder.php',
				"Swift_Encoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Encoder.php',
				"Swift_Events_CommandEvent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandEvent.php',
				"Swift_Events_CommandListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/CommandListener.php',
				"Swift_Events_Event" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/Event.php',
				"Swift_Events_EventDispatcher" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php',
				"Swift_Events_EventListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php',
				"Swift_Events_EventObject" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventObject.php',
				"Swift_Events_ResponseEvent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseEvent.php',
				"Swift_Events_ResponseListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/ResponseListener.php',
				"Swift_Events_SendEvent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendEvent.php',
				"Swift_Events_SendListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php',
				"Swift_Events_SimpleEventDispatcher" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php',
				"Swift_Events_TransportChangeEvent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeEvent.php',
				"Swift_Events_TransportChangeListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportChangeListener.php',
				"Swift_Events_TransportExceptionEvent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportExceptionEvent.php',
				"Swift_Events_TransportExceptionListener" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/TransportExceptionListener.php',
				"Swift_FailoverTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/FailoverTransport.php',
				"Swift_FileSpool" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileSpool.php',
				"Swift_FileStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/FileStream.php',
				"Swift_Filterable" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Filterable.php',
				"Swift_IdGenerator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/IdGenerator.php',
				"Swift_Image" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Image.php',
				"Swift_InputByteStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/InputByteStream.php',
				"Swift_IoException" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/IoException.php',
				"Swift_KeyCache_ArrayKeyCache" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/ArrayKeyCache.php',
				"Swift_KeyCache_DiskKeyCache" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/DiskKeyCache.php',
				"Swift_KeyCache_KeyCacheInputStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/KeyCacheInputStream.php',
				"Swift_KeyCache_NullKeyCache" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/NullKeyCache.php',
				"Swift_KeyCache_SimpleKeyCacheInputStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache/SimpleKeyCacheInputStream.php',
				"Swift_KeyCache" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/KeyCache.php',
				"Swift_LoadBalancedTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/LoadBalancedTransport.php',
				"Swift_Mailer_ArrayRecipientIterator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/ArrayRecipientIterator.php',
				"Swift_Mailer_RecipientIterator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer/RecipientIterator.php',
				"Swift_Mailer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mailer.php',
				"Swift_MemorySpool" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php',
				"Swift_Message" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Message.php',
				"Swift_Mime_Attachment" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Attachment.php',
				"Swift_Mime_CharsetObserver" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/CharsetObserver.php',
				"Swift_Mime_ContentEncoder_Base64ContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/Base64ContentEncoder.php',
				"Swift_Mime_ContentEncoder_NativeQpContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/NativeQpContentEncoder.php',
				"Swift_Mime_ContentEncoder_PlainContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/PlainContentEncoder.php',
				"Swift_Mime_ContentEncoder_QpContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoder.php',
				"Swift_Mime_ContentEncoder_QpContentEncoderProxy" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/QpContentEncoderProxy.php',
				"Swift_Mime_ContentEncoder_RawContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder/RawContentEncoder.php',
				"Swift_Mime_ContentEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/ContentEncoder.php',
				"Swift_Mime_EmbeddedFile" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/EmbeddedFile.php',
				"Swift_Mime_EncodingObserver" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/EncodingObserver.php',
				"Swift_Mime_Header" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Header.php',
				"Swift_Mime_HeaderEncoder_Base64HeaderEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/Base64HeaderEncoder.php',
				"Swift_Mime_HeaderEncoder_QpHeaderEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder/QpHeaderEncoder.php',
				"Swift_Mime_HeaderEncoder" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/HeaderEncoder.php',
				"Swift_Mime_Headers_AbstractHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/AbstractHeader.php',
				"Swift_Mime_Headers_DateHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/DateHeader.php',
				"Swift_Mime_Headers_IdentificationHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/IdentificationHeader.php',
				"Swift_Mime_Headers_MailboxHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/MailboxHeader.php',
				"Swift_Mime_Headers_OpenDKIMHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/OpenDKIMHeader.php',
				"Swift_Mime_Headers_ParameterizedHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/ParameterizedHeader.php',
				"Swift_Mime_Headers_PathHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/PathHeader.php',
				"Swift_Mime_Headers_UnstructuredHeader" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/Headers/UnstructuredHeader.php',
				"Swift_Mime_IdGenerator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/IdGenerator.php',
				"Swift_Mime_MimePart" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/MimePart.php',
				"Swift_Mime_SimpleHeaderFactory" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderFactory.php',
				"Swift_Mime_SimpleHeaderSet" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleHeaderSet.php',
				"Swift_Mime_SimpleMessage" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleMessage.php',
				"Swift_Mime_SimpleMimeEntity" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Mime/SimpleMimeEntity.php',
				"Swift_MimePart" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/MimePart.php',
				"Swift_NullTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/NullTransport.php',
				"Swift_OutputByteStream" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/OutputByteStream.php',
				"Swift_Plugins_AntiFloodPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/AntiFloodPlugin.php',
				"Swift_Plugins_BandwidthMonitorPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/BandwidthMonitorPlugin.php',
				"Swift_Plugins_Decorator_Replacements" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Decorator/Replacements.php',
				"Swift_Plugins_DecoratorPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/DecoratorPlugin.php',
				"Swift_Plugins_ImpersonatePlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ImpersonatePlugin.php',
				"Swift_Plugins_Logger" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Logger.php',
				"Swift_Plugins_LoggerPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/LoggerPlugin.php',
				"Swift_Plugins_Loggers_ArrayLogger" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/ArrayLogger.php',
				"Swift_Plugins_Loggers_EchoLogger" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Loggers/EchoLogger.php',
				"Swift_Plugins_MessageLogger" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php',
				"Swift_Plugins_Pop_Pop3Connection" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Pop/Pop3Connection.php',
				"Swift_Plugins_Pop_Pop3Exception" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Pop/Pop3Exception.php',
				"Swift_Plugins_PopBeforeSmtpPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/PopBeforeSmtpPlugin.php',
				"Swift_Plugins_RedirectingPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/RedirectingPlugin.php',
				"Swift_Plugins_Reporter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporter.php',
				"Swift_Plugins_ReporterPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ReporterPlugin.php',
				"Swift_Plugins_Reporters_HitReporter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HitReporter.php',
				"Swift_Plugins_Reporters_HtmlReporter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Reporters/HtmlReporter.php',
				"Swift_Plugins_Sleeper" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Sleeper.php',
				"Swift_Plugins_ThrottlerPlugin" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/ThrottlerPlugin.php',
				"Swift_Plugins_Timer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/Timer.php',
				"Swift_Preferences" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Preferences.php',
				"Swift_ReplacementFilterFactory" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/ReplacementFilterFactory.php',
				"Swift_RfcComplianceException" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/RfcComplianceException.php',
				"Swift_SendmailTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/SendmailTransport.php',
				"Swift_Signer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signer.php',
				"Swift_Signers_BodySigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/BodySigner.php',
				"Swift_Signers_DKIMSigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/DKIMSigner.php',
				"Swift_Signers_DomainKeySigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/DomainKeySigner.php',
				"Swift_Signers_HeaderSigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/HeaderSigner.php',
				"Swift_Signers_OpenDKIMSigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/OpenDKIMSigner.php',
				"Swift_Signers_SMimeSigner" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Signers/SMimeSigner.php',
				"Swift_SmtpTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/SmtpTransport.php',
				"Swift_Spool" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php',
				"Swift_SpoolTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/SpoolTransport.php',
				"Swift_StreamFilter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilter.php',
				"Swift_StreamFilters_ByteArrayReplacementFilter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/ByteArrayReplacementFilter.php',
				"Swift_StreamFilters_StringReplacementFilter" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilter.php',
				"Swift_StreamFilters_StringReplacementFilterFactory" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/StreamFilters/StringReplacementFilterFactory.php',
				"Swift_SwiftException" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/SwiftException.php',
				"Swift_Transport_AbstractSmtpTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/AbstractSmtpTransport.php',
				"Swift_Transport_Esmtp_Auth_CramMd5Authenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/CramMd5Authenticator.php',
				"Swift_Transport_Esmtp_Auth_LoginAuthenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/LoginAuthenticator.php',
				"Swift_Transport_Esmtp_Auth_NTLMAuthenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/NTLMAuthenticator.php',
				"Swift_Transport_Esmtp_Auth_PlainAuthenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/PlainAuthenticator.php',
				"Swift_Transport_Esmtp_Auth_XOAuth2Authenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Auth/XOAuth2Authenticator.php',
				"Swift_Transport_Esmtp_Authenticator" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/Authenticator.php',
				"Swift_Transport_Esmtp_AuthHandler" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/Esmtp/AuthHandler.php',
				"Swift_Transport_EsmtpHandler" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpHandler.php',
				"Swift_Transport_EsmtpTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/EsmtpTransport.php',
				"Swift_Transport_FailoverTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/FailoverTransport.php',
				"Swift_Transport_IoBuffer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/IoBuffer.php',
				"Swift_Transport_LoadBalancedTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/LoadBalancedTransport.php',
				"Swift_Transport_NullTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/NullTransport.php',
				"Swift_Transport_SendmailTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SendmailTransport.php',
				"Swift_Transport_SmtpAgent" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SmtpAgent.php',
				"Swift_Transport_SpoolTransport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SpoolTransport.php',
				"Swift_Transport_StreamBuffer" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/StreamBuffer.php',
				"Swift_Transport" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php',
				"Swift_TransportException" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift/TransportException.php',
				"Swift" => 'vendor/swiftmailer/swiftmailer/lib/classes/Swift.php',
				"JsonException" => 'vendor/symfony/polyfill-php73/Resources/stubs/JsonException.php',
			],
		];
	}

	public static function Autoload_File_Mapping()
	{
		self::$autoload_files = [
				'5e542e65c06136d8b5a9be93b6252e3f' => 'vendor/opis/closure/functions.php',
				'2692c8007f216c044b30161f9a0ea1f7' => 'vendor/react/promise/src/functions_include.php',
				'bbb734b748bcbbed3f75fe65aebdba08' => 'vendor/react/promise-timer/src/functions_include.php',
				'c63465383f4946b7e1b8dafe40797a88' => 'vendor/swiftmailer/swiftmailer/lib/swift_required.php',
				'631e27653e6b6eab4467fee685cdcd60' => 'vendor/symfony/polyfill-ctype/bootstrap.php',
				'b00be51f2f39ae517e78135278b7e0c9' => 'vendor/symfony/polyfill-intl-idn/bootstrap.php',
				'cb46e787aba770a09023ef52ee9c6b42' => 'vendor/symfony/polyfill-mbstring/bootstrap.php',
				'930b0cc67bf61df8ddd305a09235870a' => 'vendor/symfony/polyfill-php72/bootstrap.php',
				'174730de74cbd282e4a0cbc2be4dc7bd' => 'vendor/symfony/polyfill-php73/bootstrap.php',
				'e70f9cd6d5da639c76256ecbe2cf3de8' => 'vendor/symfony/var-dumper/Resources/functions/dump.php',
				'242d1de116a4fad8d44965c367df1751' => 'vendor/tightenco/collect/src/Collect/Support/helpers.php',
				'd33a622ab963cf8c165c661ff871e9e9' => 'vendor/tightenco/collect/src/Collect/Support/alias.php',
		];
	}

	public static function Load_Class_Loader($class)
	{
		// 處理mapping
		if(empty(self::$hahaha))
		{
			self::Class_Mapping();
		}

		$nodes_ = explode("\\" , $class);

		$find_ = &self::$hahaha;

		$last_ = count($nodes_) - 1;
		$i = 0;
		foreach($nodes_ as &$node)
		{
			if($i == $last_)
			{
				$find_ = &$find_["_Items"];
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$filename_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);

				require self::$hahaha_dir . $filename_;
			}
			else
			{
				if(empty($temp_ = &$find_[$node]))
				{
					return false;
				}
				$find_ = &$temp_;
				// 取消reference，避免$temp_ NULL時會加入'key' => NULL
				unset($temp_);
				$i++;
			}
		}

	}

	public static function Autoload()
	{
		self::$hahaha_dir = dirname(__FILE__) . '/';
		if (null !== self::$loader)
		{
			return self::$loader;
		}

		self::$loader = new \hahaha\hahaha_loader();
		spl_autoload_register(array('hahaha\hahaha_loader', 'Load_Class_Loader'), true, true);

		if(empty(self::$autoload_files))
		{
			self::Autoload_File_Mapping();
		}

		//load autoload files
		// 避免跟其他套件重複引用，這裡用require_once
		foreach (self::$autoload_files as $key => &$file)
		{
			if (empty($GLOBALS['__composer_autoload_files'][$key]))
			{
				require_once self::$hahaha_dir . $file;
				
				$GLOBALS['__composer_autoload_files'][$key] = true;
			}
		}

		return self::$loader;
	}
}

return \hahaha\hahaha_loader::Autoload();