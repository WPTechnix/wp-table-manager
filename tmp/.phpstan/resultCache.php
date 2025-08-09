<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1754754482,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.22',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80307,
  'projectConfig' => '{conditionalTags: {PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule: {phpstan.rules.rule: %strictRules.disallowedLooseComparison%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\Cast\\UselessCastRule: {phpstan.rules.rule: %strictRules.uselessCast%}, PHPStan\\Rules\\Classes\\RequireParentConstructCallRule: {phpstan.rules.rule: %strictRules.requireParentConstructorCall%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule: {phpstan.rules.rule: %strictRules.disallowedBacktick%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule: {phpstan.rules.rule: %strictRules.disallowedEmpty%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule: {phpstan.rules.rule: %strictRules.disallowedImplicitArrayCreation%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule: {phpstan.rules.rule: %strictRules.disallowedShortTernary%}, PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\Functions\\ArrayFilterStrictRule: {phpstan.rules.rule: %strictRules.strictArrayFilter%}, PHPStan\\Rules\\Functions\\ClosureUsesThisRule: {phpstan.rules.rule: %strictRules.closureUsesThis%}, PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule: {phpstan.rules.rule: %strictRules.matchingInheritedMethodNames%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule: {phpstan.rules.rule: %strictRules.strictFunctionCalls%}, PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule: {phpstan.rules.rule: %strictRules.switchConditionsMatchingType%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableVariablesRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension: {phpstan.phpDoc.typeNodeResolverExtension: %phpunit.convertUnionToIntersectionType%}}, parameters: {strictRulesInstalled: true, polluteScopeWithLoopInitialAssignments: false, polluteScopeWithAlwaysIterableForeach: false, polluteScopeWithBlock: false, checkDynamicProperties: true, checkExplicitMixedMissingReturn: true, checkFunctionNameCase: true, checkInternalClassCaseSensitivity: true, reportMaybesInMethodSignatures: true, reportStaticMethodSignatures: true, reportMaybesInPropertyPhpDocTypes: true, reportWrongPhpDocTypeInVarTag: true, strictRules: {allRules: true, disallowedLooseComparison: %strictRules.allRules%, booleansInConditions: %strictRules.allRules%, booleansInLoopConditions: [%strictRules.allRules%, %featureToggles.bleedingEdge%], uselessCast: %strictRules.allRules%, requireParentConstructorCall: %strictRules.allRules%, disallowedBacktick: %strictRules.allRules%, disallowedEmpty: %strictRules.allRules%, disallowedImplicitArrayCreation: %strictRules.allRules%, disallowedShortTernary: %strictRules.allRules%, overwriteVariablesWithLoop: %strictRules.allRules%, closureUsesThis: %strictRules.allRules%, matchingInheritedMethodNames: %strictRules.allRules%, numericOperandsInArithmeticOperators: %strictRules.allRules%, strictFunctionCalls: %strictRules.allRules%, dynamicCallOnStaticMethod: %strictRules.allRules%, switchConditionsMatchingType: %strictRules.allRules%, noVariableVariables: false, strictArrayFilter: %strictRules.allRules%, illegalConstructorMethodCall: %strictRules.allRules%}, bootstrapFiles: [../../php-stubs/wordpress-stubs/wordpress-stubs.php, bootstrap.php], dynamicConstantNames: [WP_DEBUG, WP_DEBUG_LOG, WP_DEBUG_DISPLAY, EMPTY_TRASH_DAYS, WP_CLI, COOKIE_DOMAIN, SAVEQUERIES, SCRIPT_DEBUG], earlyTerminatingFunctionCalls: [wp_send_json, wp_nonce_ays], earlyTerminatingMethodCalls: {IXR_Server: [output], WP_Ajax_Response: [send], WP_CLI: [error, halt], PHPUnit\\Framework\\Assert: [fail, markTestIncomplete, markTestSkipped]}, phpunit: {convertUnionToIntersectionType: true}, additionalConstructors: [PHPUnit\\Framework\\TestCase::setUp], stubFiles: [stubs/Assert.stub, stubs/AssertionFailedError.stub, stubs/ExpectationFailedException.stub, stubs/MockBuilder.stub, stubs/MockObject.stub, stubs/Stub.stub, stubs/TestCase.stub], exceptions: {uncheckedExceptionRegexes: [\'#^PHPUnit\\\\#\', \'#^SebastianBergmann\\\\#\']}, phpVersion: {min: 80000, max: 80410}, level: 8, tmpDir: E:\\wp-table-manager\\tmp\\.phpstan, paths: [E:\\wp-table-manager\\src], scanFiles: [%rootDir%/../../php-stubs/wordpress-tests-stubs/wordpress-tests-stubs.php], treatPhpDocTypesAsCertain: false}, rules: [SzepeViktor\\PHPStan\\WordPress\\HookCallbackRule, SzepeViktor\\PHPStan\\WordPress\\HookDocsRule, SzepeViktor\\PHPStan\\WordPress\\WpConstantFetchRule], services: [{class: PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper}, {class: PHPStan\\Rules\\Operators\\OperatorRuleHelper}, {class: PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule, arguments: {universalObjectCratesClasses: %universalObjectCratesClasses%}}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule}, {class: PHPStan\\Rules\\Cast\\UselessCastRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Classes\\RequireParentConstructCallRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule}, {class: PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule}, {class: PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule}, {class: PHPStan\\Rules\\Functions\\ArrayFilterStrictRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, checkNullables: %checkNullables%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Functions\\ClosureUsesThisRule}, {class: PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule}, {class: PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule}, {class: PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableVariablesRule}, {class: SzepeViktor\\PHPStan\\WordPress\\HookDocBlock}, {class: SzepeViktor\\PHPStan\\WordPress\\EscSqlDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\ShortcodeAttsDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\ApplyFiltersDynamicFunctionReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\WpParseUrlFunctionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\HookDocsVisitor, tags: [phpstan.parser.richParserNodeVisitor]}, {class: SzepeViktor\\PHPStan\\WordPress\\AssertWpErrorTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: SzepeViktor\\PHPStan\\WordPress\\AssertNotWpErrorTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertStaticMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Rules\\PHPUnit\\CoversHelper}, {class: PHPStan\\Rules\\PHPUnit\\AnnotationHelper}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelper, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelperFactory, arguments: {parser: @defaultAnalysisParser}}]}',
  'analysedPaths' => 
  array (
    0 => 'E:\\wp-table-manager\\src',
  ),
  'scannedFiles' => 
  array (
    'E:\\wp-table-manager\\vendor\\phpstan\\phpstan/../../php-stubs/wordpress-tests-stubs/wordpress-tests-stubs.php' => 'eebc1766c4ea48d58f0d6e5aa347b6d5968fa4ac',
  ),
  'composerLocks' => 
  array (
    'E:/wp-table-manager/composer.lock' => '866e53cd04f785989b1f0f593adedee448fa1a15',
  ),
  'composerInstalled' => 
  array (
    'E:/wp-table-manager/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'doctrine/instantiator' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../doctrine/instantiator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.6.0',
          'version' => '5.6.0.0',
          'reference' => '221b0d0fdf1369c71047ad1d18bb5880017bbc56',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-stubs/wordpress-stubs' => 
        array (
          'pretty_version' => 'v6.8.2',
          'version' => '6.8.2.0',
          'reference' => '9c8e22e437463197c1ec0d5eaa9ddd4a0eb6d7f8',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../php-stubs/wordpress-stubs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'php-stubs/wordpress-tests-stubs' => 
        array (
          'pretty_version' => 'v6.8.0',
          'version' => '6.8.0.0',
          'reference' => '95979e5c671c72350dde78b89e29afdd88c37140',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../php-stubs/wordpress-tests-stubs',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpcompatibility/php-compatibility' => 
        array (
          'pretty_version' => '9.3.5',
          'version' => '9.3.5.0',
          'reference' => '9fb324479acf6f39452e0655d2429cc0d3914243',
          'type' => 'phpcodesniffer-standard',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpcompatibility/php-compatibility',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.22',
          'version' => '2.1.22.0',
          'reference' => '41600c8379eb5aee63e9413fe9e97273e25d57e4',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '2.0.7',
          'version' => '2.0.7.0',
          'reference' => '9a9b161baee88a5f5c58d816943cff354ff233dc',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.6',
          'version' => '2.0.6.0',
          'reference' => 'f9f77efa9de31992a832ff77ea52eb42d675b094',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '9.2.32',
          'version' => '9.2.32.0',
          'reference' => '85402a822d1ecf1db1096959413d35e1c37cf1a5',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '3.0.6',
          'version' => '3.0.6.0',
          'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '3.1.1',
          'version' => '3.1.1.0',
          'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '5.0.3',
          'version' => '5.0.3.0',
          'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '9.6.23',
          'version' => '9.6.23.0',
          'reference' => '43d2cb18d0675c38bd44982a5d1d88f6d53d8d95',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '2b56bea83a09de3ac06bb18b92f068e60cc6f50b',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '1.0.8',
          'version' => '1.0.8.0',
          'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '4.0.8',
          'version' => '4.0.8.0',
          'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '25f207c40d62b8b7aa32f5ab026c53561964053a',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => 'ba01945089c3a293b01ba9badc29ad55b106b0bc',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '5.1.5',
          'version' => '5.1.5.0',
          'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '4.0.6',
          'version' => '4.0.6.0',
          'reference' => '78c00df8f170e02473b682df15bfcdacc3d32d72',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '5.0.7',
          'version' => '5.0.7.0',
          'reference' => 'bca7df1f32ee6fe93b4d4a9abbf69e13a4ada2c9',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '1.0.4',
          'version' => '1.0.4.0',
          'reference' => 'e1e4a170560925c26d424b6a03aed157e7dcc5c5',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '4.0.5',
          'version' => '4.0.5.0',
          'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/resource-operations' => 
        array (
          'pretty_version' => '3.0.4',
          'version' => '3.0.4.0',
          'reference' => '05d5692a7993ecccd56a03e40cd7e5b09b1d404e',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/resource-operations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => 
        array (
          'pretty_version' => '3.13.2',
          'version' => '3.13.2.0',
          'reference' => '5b5e3821314f947dd040c70f7992a64eac89025c',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../squizlabs/php_codesniffer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'szepeviktor/phpstan-wordpress' => 
        array (
          'pretty_version' => 'v2.0.2',
          'version' => '2.0.2.0',
          'reference' => '963887b04c21fe7ac78e61c1351f8b00fff9f8f8',
          'type' => 'phpstan-extension',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../szepeviktor/phpstan-wordpress',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.2.3',
          'version' => '1.2.3.0',
          'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'yoast/phpunit-polyfills' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '134921bfca9b02d8f374c48381451da1d98402f9',
          'type' => 'library',
          'install_path' => 'E:\\wp-table-manager\\vendor\\composer/../yoast/phpunit-polyfills',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'E:\\wp-table-manager\\vendor\\php-stubs\\wordpress-stubs\\wordpress-stubs.php' => '453eb11cbde1730b2f61449094bd9c2d4e208903',
    'E:\\wp-table-manager\\vendor\\szepeviktor\\phpstan-wordpress\\bootstrap.php' => '6988fb739011438effaca4d4e94ae0970152d3ff',
    'phar://E:\\wp-table-manager\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar://E:\\wp-table-manager\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://E:\\wp-table-manager\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://E:\\wp-table-manager\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'calendar',
    8 => 'ctype',
    9 => 'curl',
    10 => 'date',
    11 => 'dom',
    12 => 'exif',
    13 => 'filter',
    14 => 'hash',
    15 => 'iconv',
    16 => 'json',
    17 => 'libxml',
    18 => 'mbstring',
    19 => 'mysqli',
    20 => 'mysqlnd',
    21 => 'openssl',
    22 => 'pcre',
    23 => 'random',
    24 => 'readline',
    25 => 'session',
    26 => 'standard',
    27 => 'tokenizer',
    28 => 'xml',
    29 => 'xmlreader',
    30 => 'xmlwriter',
    31 => 'zip',
    32 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'line' => 114,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 114,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'line' => 117,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 117,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'line' => 952,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 952,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'line' => 978,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 978,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php',
       'line' => 248,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 248,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'E:\\wp-table-manager\\src\\Table.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 195,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 195,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 195,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 195,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 195,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 195,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 201,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 201,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 205,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 205,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 456,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 456,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 539,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 539,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 540,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 540,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 570,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 570,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 752,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 752,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 791,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 791,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $query of method wpdb::prepare() expects literal-string, non-falsy-string given.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 794,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 794,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 797,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 797,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 803,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 803,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 826,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 826,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 854,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 854,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 894,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 894,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 981,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 981,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1081,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1081,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1157,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1157,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1157,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1157,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1157,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1157,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1157,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1157,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1229,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1229,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1293,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1293,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1382,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1382,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    26 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Construct empty() is not allowed. Use more strict comparison.',
       'file' => 'E:\\wp-table-manager\\src\\Table.php',
       'line' => 1394,
       'canBeIgnored' => true,
       'filePath' => 'E:\\wp-table-manager\\src\\Table.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1394,
       'nodeType' => 'PhpParser\\Node\\Expr\\Empty_',
       'identifier' => 'empty.notAllowed',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'E:\\wp-table-manager\\src\\Schema\\ColumnDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'getName',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      1 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'getType',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      2 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'isNullable',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      3 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'isPrimary',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      4 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'isUnique',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      5 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'isFulltext',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      6 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'hasIndex',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      7 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'isAutoIncrement',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
      8 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        1 => 'getDefault',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
      ),
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
        ),
        1 => 'primary',
        2 => 168,
      ),
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\ForeignKeyDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getName',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
      1 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getColumn',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
      2 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getReferencesTable',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
      3 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getReferencesColumn',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
      4 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getOnDelete',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
      5 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
        1 => 'getOnUpdate',
        2 => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
      ),
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'getName',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
      1 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'getColumns',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
      2 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'getType',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
      3 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'isUnique',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
      4 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'isFulltext',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
      5 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
        1 => 'isSpatial',
        2 => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
      ),
    ),
  ),
  'E:\\wp-table-manager\\src\\Table.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Table',
        1 => 'getSchemaVersion',
        2 => 'WPTechnix\\WPTableManager\\Table',
      ),
      1 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Table',
        1 => 'getPrimaryKey',
        2 => 'WPTechnix\\WPTableManager\\Table',
      ),
      2 => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Table',
        1 => 'getForeignKeyName',
        2 => 'WPTechnix\\WPTableManager\\Table',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'update_site_option',
        1 => 483,
      ),
      1 => 
      array (
        0 => 'update_option',
        1 => 485,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
        ),
        1 => 'ifNotExists',
        2 => 386,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
        ),
        1 => 'id',
        2 => 387,
      ),
      2 => 
      array (
        0 => 
        array (
          0 => 'WPTechnix\\WPTableManager\\Table',
        ),
        1 => 'getTableVersions',
        2 => 478,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Psr\\Log\\LoggerAwareTrait',
      ),
    ),
  ),
); },
	'dependencies' => array (
  'E:\\wp-table-manager\\src\\Exceptions\\SchemaException.php' => 
  array (
    'fileHash' => '66d90ab6ed8f4f7bac7ffd45167cbfdc05e6d9f9',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
      1 => 'E:\\wp-table-manager\\src\\Schema\\ForeignKeyDefinition.php',
      2 => 'E:\\wp-table-manager\\src\\Table.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Interfaces\\TableInterface.php' => 
  array (
    'fileHash' => '2de1cba45aa287d1332bb61f4e5e65f7294db5de',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Table.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\ColumnDefinition.php' => 
  array (
    'fileHash' => '093a1a452d267fe4df117751ed820f84667af482',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
      1 => 'E:\\wp-table-manager\\src\\Table.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php' => 
  array (
    'fileHash' => 'a26b78851a32fb64f23f2722010a652df504b482',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Schema\\ColumnDefinition.php',
      1 => 'E:\\wp-table-manager\\src\\Table.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\ForeignKeyDefinition.php' => 
  array (
    'fileHash' => 'a3ee6f91dccc2decd255807d0996d47fed3a2757',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php' => 
  array (
    'fileHash' => 'cf67de8ca98d4f5211c9d0e51439664b307dd262',
    'dependentFiles' => 
    array (
      0 => 'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php',
    ),
  ),
  'E:\\wp-table-manager\\src\\Table.php' => 
  array (
    'fileHash' => 'bcdddb44035eb971e2c16283897eebd308deb1ad',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'E:\\wp-table-manager\\src\\Exceptions\\SchemaException.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Exception thrown when schema validation fails.
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Exceptions',
         'uses' => 
        array (
          'exception' => 'Exception',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Exception',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Interfaces\\TableInterface.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Interface TableInterface
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchemaVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the current schema version of the table.
     *
     * @return int Schema version number.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInstalledVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the currently installed version of the table.
     *
     * @return int Installed version number.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTableName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the full, sanitized table name with prefixes.
     *
     * In a multisite installation, it uses the base network prefix (e.g., `wp_`)
     * for shared tables; otherwise, it uses the site-specific prefix (e.g., `wp_2_`).
     *
     * @param bool $withWpPrefix Whether to include the global WordPress prefix (e.g., \'wp_\').
     * @return string The sanitized, fully prefixed table name.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'withWpPrefix',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTableAlias',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the table alias used in queries.
     *
     * @return string Table alias.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPrimaryKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the primary key column name for the table.
     *
     * @return string Primary key column name.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getForeignKeyName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the foreign key name for the table.
     *
     * @return string Foreign key name.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'install',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Installs the table in the database.
     *
     * @return void
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'drop',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Drops the table from the database.
     *
     * @return bool True on success, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Interfaces',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Schema\\ColumnDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class ColumnDefinition
 *
 * Represents a column definition for MySQL CREATE TABLE statements.
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Schema',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Column name.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Column type.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'nullable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column is nullable.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'default',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Default value for the column.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'unsigned',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column is unsigned.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'autoIncrement',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column auto-increments.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'comment',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Column comment.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'isPrimary',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column is a primary key.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'isUnique',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column should have a unique index.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'isFulltext',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column should have a fulltext index.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hasIndex',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column should have a regular index.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'onUpdateCurrent',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether to add ON UPDATE CURRENT_TIMESTAMP.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'charset',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Character set for the column.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collation',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Collation for the column.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'zerofill',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column is zerofill.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'binary',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the column is binary.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'position',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The column position in the table (FIRST or AFTER column_name).
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'generated',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generated column expression (for virtual/stored generated columns).
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'stored',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the generated column is stored (true) or virtual (false).
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'schema',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Reference to the parent schema (for adding indexes).
     *
     * @var CreateTableSchema|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Constructor.
     *
     * @param string $name Column name.
     * @param string $type Column type.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setSchema',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the parent schema reference.
     *
     * @param CreateTableSchema $schema The parent schema.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'schema',
               'type' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nullable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column nullable.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'notNull',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column not nullable.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'default',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set a default value for the column.
     *
     * @param string|int|float|bool|null $value Default value.
     * @param bool                       $raw   If true, the value will not be quoted.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string|int|float|bool|null',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'raw',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unsigned',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column unsigned.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'zerofill',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column zerofill.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'binary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column binary.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'autoIncrement',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Make the column auto-increment.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        29 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'primary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the column as primary key.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        30 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unique',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a unique index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        31 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fulltext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a fulltext index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        32 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a regular index for this column.
     *
     * @param string|null $indexName Custom index name (optional).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        33 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'comment',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a comment to the column.
     *
     * @param string $comment Comment.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        34 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onUpdateCurrentTimestamp',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add ON UPDATE CURRENT_TIMESTAMP to the column.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        35 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'charset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set character set for the column.
     *
     * @param string $charset Character set.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'charset',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        36 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set collation for the column.
     *
     * @param string $collation Collation.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collation',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        37 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'first',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the column position to FIRST.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        38 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'after',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the column position to AFTER another column.
     *
     * @param string $columnName The column name to place this column after.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        39 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'virtualAs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a virtual generated column.
     *
     * @param string $expression The generation expression.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expression',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        40 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'storedAs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a stored generated column.
     *
     * @param string $expression The generation expression.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expression',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        41 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toSql',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate the column definition SQL.
     *
     * @param bool $isPartOfCompositePrimaryKey Whether this column is part of a composite primary key.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'isPartOfCompositePrimaryKey',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        42 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the column name.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        43 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the column type.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        44 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isNullable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column is nullable.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        45 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isPrimary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column is a primary key.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        46 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isUnique',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column should have a unique index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        47 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isFulltext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column should have a fulltext index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        48 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasIndex',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column should have a regular index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        49 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAutoIncrement',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the column auto-increments.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        50 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDefault',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the default value.
     *
     * @return string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Schema\\CreateTableSchema.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class CreateTableSchema
 *
 * A fluent interface for building MySQL CREATE TABLE statements.
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Schema',
         'uses' => 
        array (
          'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
          'wpdb' => 'wpdb',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'columns',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The columns to be added to the table.
     *
     * @var array<int, ColumnDefinition>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'indexes',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The indexes to be added to the table.
     *
     * @var array<int, IndexDefinition>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'foreignKeys',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The foreign keys to be added to the table.
     *
     * @var array<int, ForeignKeyDefinition>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKey',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The primary key columns.
     *
     * @var array<int, string>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'engine',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The storage engine for the table.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'charset',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The character set for the table.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'collation',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The collation for the table.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'comment',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table comment.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'ifNotExists',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the table should be created if not exists.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'temporary',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Whether the table should be temporary.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'autoIncrement',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Auto increment starting value.
     *
     * @var int|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'rowFormat',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Table row format.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Constructor.
     *
     * @param string $tableName The table name.
     * @param wpdb   $wpdb       The WordPress database object.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'tableName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'wpdb',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a column and set the schema reference.
     *
     * @param ColumnDefinition $column The column to add.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'ifNotExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the table to be created only if it doesn\'t exist.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'temporary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the table as temporary.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'id',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add an auto-incrementing BIGINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'bigInteger',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a BIGINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'integer',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add an INT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tinyInteger',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TINYINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'smallInteger',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a SMALLINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mediumInteger',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a MEDIUMINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'string',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a VARCHAR column.
     *
     * @param string   $column Column name.
     * @param int|null $length Column length.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'length',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'char',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a CHAR column.
     *
     * @param string   $column Column name.
     * @param int|null $length Column length.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'length',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'text',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tinyText',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TINYTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mediumText',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a MEDIUMTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'longText',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a LONGTEXT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decimal',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a DECIMAL column.
     *
     * @param string $column Column name.
     * @param int    $total  Total digits.
     * @param int    $places Decimal places.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'total',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'places',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        29 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'float',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a FLOAT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        30 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'double',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a DOUBLE column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        31 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boolean',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a BOOLEAN column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        32 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'date',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a DATE column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        33 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'datetime',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a DATETIME column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'precision',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        34 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'timestamp',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TIMESTAMP column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'precision',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        35 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'time',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TIME column.
     *
     * @param string   $column    Column name.
     * @param int|null $precision Fractional seconds precision.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'precision',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        36 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'year',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a YEAR column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        37 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'json',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a JSON column.
     *
     * Note: JSON column type requires MySQL 5.7.8+ or MariaDB 10.2.7+
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        38 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'blob',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a BLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        39 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tinyBlob',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a TINYBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        40 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'mediumBlob',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a MEDIUMBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        41 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'longBlob',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a LONGBLOB column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        42 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'binary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a BINARY column.
     *
     * @param string $column Column name.
     * @param int    $length Column length.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'length',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        43 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'varBinary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a VARBINARY column.
     *
     * @param string $column Column name.
     * @param int    $length Column length.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'length',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        44 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'geometry',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a GEOMETRY column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        45 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'point',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a POINT column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        46 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lineString',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a LINESTRING column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        47 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'polygon',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a POLYGON column.
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        48 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'enum',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add an ENUM column.
     *
     * @param string               $column Column name.
     * @param array<int, string>   $values Allowed values.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        49 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'set',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a SET column.
     *
     * @param string               $column Column name.
     * @param array<int, string>   $values Allowed values.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'values',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        50 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'uuid',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a UUID column as CHAR(36).
     *
     * @param string $column Column name.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        51 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'timestamps',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add created_at and updated_at timestamp columns.
     *
     * @param bool $useDatetime If true, use the DATETIME type instead of TIMESTAMP.
     *                           Defaults to true.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'useDatetime',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        52 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'softDeletes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a soft delete timestamp column.
     *
     * @param string $column      Column name.
     * @param bool   $useDatetime If true, use the DATETIME type instead of TIMESTAMP.
     *
     * @return ColumnDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ColumnDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'useDatetime',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        53 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'morphs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add morphable columns for polymorphic relationships.
     *
     * @param string $name The base name for the morph columns.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        54 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nullableMorphs',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add nullable morphable columns for polymorphic relationships.
     *
     * @param string $name The base name for the morph columns.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        55 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'primary',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a primary key.
     *
     * @param string|array<int, string> $columns Column name(s).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        56 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add an index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        57 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unique',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a unique index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        58 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'fulltext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a fulltext index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        59 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'spatial',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a spatial index.
     *
     * @param string|array<int, string> $columns Column name(s).
     * @param string|null               $name    Index name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        60 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'foreign',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Add a foreign key constraint.
     *
     * @param string      $column Column name.
     * @param string|null $name   Constraint name.
     *
     * @return ForeignKeyDefinition
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        61 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'engine',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the storage engine.
     *
     * @param string $engine Engine name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'engine',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        62 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'charset',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the character set.
     *
     * @param string $charset Character set.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'charset',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        63 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collation',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the collation.
     *
     * @param string $collation Collation.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'collation',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        64 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'comment',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the table comment.
     *
     * @param string $comment Comment.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        65 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'autoIncrement',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the auto increment starting value.
     *
     * @param int $value Auto increment starting value.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        66 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rowFormat',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the row format.
     *
     * @param string $format Row format (DYNAMIC, FIXED, COMPRESSED, REDUNDANT, COMPACT).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'format',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        67 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'processColumnIndexes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Process columns marked for unique/fulltext indexes after schema building.
     *
     * @return void
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        68 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toSql',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate the CREATE TABLE SQL statement.
     *
     * @return string
     *
     * @throws SchemaException If no columns are defined.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        69 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isExplicitPrimaryKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the primary key was explicitly set (not just from column->primary()).
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        70 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateIndexName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate an index name.
     *
     * @param array<int, string>|string $columnNames Column names.
     * @param string                    $prefix       Index type prefix.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
              'wpdb' => 'wpdb',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnNames',
               'type' => 'array|string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prefix',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Schema\\ForeignKeyDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Schema\\ForeignKeyDefinition',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class ForeignKeyDefinition
 *
 * Represents a foreign key constraint definition for MySQL/MariaDB CREATE TABLE statements.
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Schema',
         'uses' => 
        array (
          'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'referencesTable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Referenced table.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'referencesColumn',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Referenced column.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'onDelete',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ON DELETE action.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'onUpdate',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * ON UPDATE action.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'VALID_ACTIONS',
               'value' => '[\'RESTRICT\', \'CASCADE\', \'SET NULL\', \'NO ACTION\', \'SET DEFAULT\']',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => false,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Valid referential actions.
     *
     * @var array<int, string>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Constructor.
     *
     * @param string $name    Constraint name.
     * @param string $column  Local column.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'references',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the referenced table and column.
     *
     * @param string $table  Referenced table.
     * @param string $column Referenced column.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'table',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the ON DELETE action.
     *
     * @param string $action Action (CASCADE, SET NULL, RESTRICT, NO ACTION, SET DEFAULT).
     *
     * @return $this
     *
     * @throws SchemaException If an invalid action is provided.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'onUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the ON UPDATE action.
     *
     * @param string $action Action (CASCADE, SET NULL, RESTRICT, NO ACTION, SET DEFAULT).
     *
     * @return $this
     *
     * @throws SchemaException If an invalid action is provided.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cascadeOnDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON DELETE CASCADE.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cascadeOnUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON UPDATE CASCADE.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cascade',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for both ON DELETE and ON UPDATE CASCADE.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restrictOnDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON DELETE RESTRICT.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restrictOnUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON UPDATE RESTRICT.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restrict',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for both ON DELETE and ON UPDATE RESTRICT.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nullOnDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON DELETE SET NULL.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'nullOnUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON UPDATE SET NULL.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'noActionOnDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON DELETE NO ACTION.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'noActionOnUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for ON UPDATE NO ACTION.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'noAction',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Shortcut for both ON DELETE and ON UPDATE NO ACTION.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toSql',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate the foreign key constraint SQL.
     *
     * @return string
     *
     * @throws SchemaException If references are not set.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the constraint name.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the local column.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getReferencesTable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the referenced table.
     *
     * @return string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getReferencesColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the referenced column.
     *
     * @return string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOnDelete',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the ON DELETE action.
     *
     * @return string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getOnUpdate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the ON UPDATE action.
     *
     * @return string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Schema\\IndexDefinition.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Schema\\IndexDefinition',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Class IndexDefinition
 *
 * Represents an index definition for MySQL CREATE TABLE statements.
 */',
         'namespace' => 'WPTechnix\\WPTableManager\\Schema',
         'uses' => 
        array (
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'name',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Index name.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'columns',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Columns in the index.
     *
     * @var array<int, string>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'type',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Index type (INDEX, UNIQUE, FULLTEXT, SPATIAL).
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'using',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Index algorithm (BTREE, HASH).
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'keyBlockSize',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Key block size.
     *
     * @var int|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'comment',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Index comment.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'visibility',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Index visibility (MySQL 8.0+).
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'parser',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Parser name for fulltext indexes.
     *
     * @var string|null
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'columnLengths',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Column lengths for partial indexes.
     *
     * @var array<string, int>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Constructor.
     *
     * @param string               $name    Index name.
     * @param array<int, string>   $columns Columns.
     * @param string               $type    Index type.
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'type',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'using',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the index algorithm.
     *
     * @param string $algorithm Index algorithm (BTREE, HASH).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'algorithm',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'keyBlockSize',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the key block size.
     *
     * @param int $size Key block size in bytes.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'size',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'comment',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the index comment.
     *
     * @param string $comment Index comment.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'comment',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'visible',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the index visibility (MySQL 8.0+).
     *
     * @param bool $visible Whether the index is visible to the optimizer.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'visible',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'invisible',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the index as invisible (MySQL 8.0+).
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'withParser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set the fulltext parser.
     *
     * @param string $parser Parser name.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'parser',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'length',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set partial index length for a column.
     *
     * @param string $column Column name.
     * @param int    $length Partial index length.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'column',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'length',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lengths',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Set partial index lengths for multiple columns.
     *
     * @param array<string, int> $lengths Array of column => length pairs.
     *
     * @return $this
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'self',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lengths',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toSql',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate the index definition SQL.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the index name.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getColumns',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the index columns.
     *
     * @return array<int, string>
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the index type.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isUnique',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if this is a unique index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isFulltext',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if this is a fulltext index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isSpatial',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if this is a spatial index.
     *
     * @return bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager\\Schema',
             'uses' => 
            array (
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'E:\\wp-table-manager\\src\\Table.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'WPTechnix\\WPTableManager\\Table',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Abstract Database Table Class.
 *
 * This class provides a robust and secure foundation for creating, migrating, and managing
 * database custom tables within a WordPress environment. It features a unified, high-compatibility
 * API for all index and column manipulations.
 *
 * Requires PHP: 8.0+
 * Requires MySQL: 5.7+ or MariaDB 10.2+
 */',
         'namespace' => 'WPTechnix\\WPTableManager',
         'uses' => 
        array (
          'logicexception' => 'LogicException',
          'wpdb' => 'wpdb',
          'throwable' => 'Throwable',
          'closure' => 'Closure',
          'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
          'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
          'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
          'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
          'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
        1 => 'Psr\\Log\\LoggerAwareInterface',
      ),
       'usedTraits' => 
      array (
        0 => 'Psr\\Log\\LoggerAwareTrait',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INDEX_TYPE_INDEX',
               'value' => '\'INDEX\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A standard, non-unique index.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INDEX_TYPE_UNIQUE',
               'value' => '\'UNIQUE\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A unique-key index, where all values in the index must be unique.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INDEX_TYPE_FULLTEXT',
               'value' => '\'FULLTEXT\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A full-text index for word-based searching.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedClassConstantsNode::__set_state(array(
           'constants' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedClassConstantNode::__set_state(array(
               'name' => 'INDEX_TYPE_SPATIAL',
               'value' => '\'SPATIAL\'',
               'attributes' => 
              array (
              ),
            )),
          ),
           'public' => true,
           'private' => false,
           'final' => false,
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A spatial index used for geographical data.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'schemaVersion',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The target schema version for this table, as defined by the current plugin code.
     * Must be defined in the child class.
     *
     * @var int
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tableName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table name, without WordPress or plugin prefixes.
     * Must be defined in the child class.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tableAlias',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A short, unique alias for the table, primarily for use in complex SQL JOINs.
     * Must be defined in the child class.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'primaryKeyColumn',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The primary key column for this table.
     * Must be defined in the child class.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'foreignKeyName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The name of this table\'s primary key when used as a foreign key in other tables.
     * Must be defined in the child class.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'multisiteShared',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Determines if the table is shared across all sites in a multisite installation.
     * If true, `$wpdb->base_prefix` will be used instead of `$wpdb->prefix`.
     * Must be defined in the child class if a shared table is desired.
     *
     * @var bool
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'bool',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tableVersionsOptionName',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The WordPress option name that stores all table schema versions for this plugin.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'tableVersions',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A local cache for the array of table versions stored in the database.
     *
     * @var array<string|int, array<string, int>>|array{}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'versionBeingInstalled',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the version number being installed.
     *
     * @var int
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'int',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        13 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'pluginPrefix',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The plugin prefix.
     *
     * @var string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        14 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fkExistsCached',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A cache for foreign key existence checks.
     *
     * @var array<string, bool>
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        15 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'indexCached',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A cache for index existence checks.
     *
     * @var array<string,array{Non_unique: string, Key_name: string, Index_type: string}|false>
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        16 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'columnCached',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A cache for column existence checks.
     *
     * @var array<string, bool>
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => 'array',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        17 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Table constructor.
     *
     * @param wpdb $wpdb The WordPress database object.
     * @param string|null $pluginPrefix The plugin prefix.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'wpdb',
               'type' => 'wpdb',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'pluginPrefix',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        18 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSchemaVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        19 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getInstalledVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        20 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTableName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritDoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'withWpPrefix',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        21 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTableAlias',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        22 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPrimaryKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        23 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getForeignKeyName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        24 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'install',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        25 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'drop',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * {@inheritdoc}
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        26 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createTable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create Table
     *
     * @param Closure $closure The closure that builds the table.
     *
     * @phpstan-param (Closure(CreateTableSchema): (CreateTableSchema|string)) $closure
     *
     * @throws SchemaException When CreateTableSchema Failed to generate SQL.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'closure',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        27 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMultisiteShared',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if the current site is a multisite installation and the table is shared across all sites.
     *
     * @return bool True if the table is shared across all sites, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        28 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getCurrentSiteId',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the current site ID.
     *
     * @return int The current site ID.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        29 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTablePrefix',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Returns the table prefix for the current database.
     *
     * @param bool $withWpdbPrefix Whether to include the WordPress prefix.
     * @param bool $withPluginPrefix Whether to include the plugin prefix.
     *
     * @return string The table prefix.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'withWpdbPrefix',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'withPluginPrefix',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        30 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'tableExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if the database table exists.
     *
     * @return bool True if the table exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        31 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getDbCharsetCollate',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Gets the database character set and collation string for use in SQL.
     *
     * @return string The charset and collate string, or an empty string if not available.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        32 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'updateCurrentDbVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Updates the stored database version for this specific table.
     *
     * @param int $version The new version number to store.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'version',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        33 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getTableVersions',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Retrieves the stored database table versions for the current site or network.
     *
     * @return array<string, int> Associative array of table versions.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        34 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'columnExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if a specific column exists in this table.
     *
     * @param string $columnName The name of the column to check.
     * @return bool True if the column exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        35 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Adds a new column to the table.
     *
     * @param string $columnName The name of the column to add.
     * @param string $columnDefinition The SQL definition of the column (e.g., \'VARCHAR(191) NOT NULL\').
     * @param string|null $afterColumn Optional. The name of the column after which to add the new column.
     * @return bool True on success or if the column already existed, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnDefinition',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'afterColumn',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        36 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dropColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Drops a column from the table.
     *
     * @param string $columnName The name of the column to drop.
     * @return bool True on success or if the column didn\'t exist, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        37 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modifyColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Modifies an existing column\'s definition (e.g., changing its data type or nullability).
     *
     * @param string $columnName The name of the column to modify.
     * @param string $newColumnDefinition The new SQL definition for the column.
     * @return bool True on success, false on failure (e.g., if the column does not exist).
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newColumnDefinition',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        38 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'renameColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Safely renames an existing column without altering its definition.
     *
     * @param string $oldColumnName The current name of the column.
     * @param string $newColumnName The new name for the column.
     * @return bool True on success, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'oldColumnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newColumnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        39 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'changeColumn',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Renames a column and simultaneously changes its definition.
     *
     * @param string $oldColumnName The current name of the column.
     * @param string $newColumnName The new name for the column.
     * @param string $newColumnDefinition The new SQL definition for the renamed column.
     * @return bool True on success, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'oldColumnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newColumnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newColumnDefinition',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        40 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'indexExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if an index exists on the table by its name only, regardless of type.
     *
     * @param string $indexName The name of the index to check.
     * @return bool True if an index with that name exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        41 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'indexExistsByType',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if an index of a specific type exists on the table. This is the core checking method.
     *
     * @param string $indexName The name of the index to check.
     * @param string $indexType The type of index, using one of the self::INDEX_TYPE_* constants.
     * @return bool True if an index of the specified name and type exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexType',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        42 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addIndex',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Adds an index of a specific type to the table. This is the core adding method.
     *
     * @param string|string[] $columns Column name or an array of column names.
     * @param string $indexType The type of index, using one of the self::INDEX_TYPE_* constants.
     * @param string|null $indexName Name of the index (optional for autogenerated name).
     *
     * @return bool True on success or if the index already existed, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexType',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        43 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dropIndex',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Drops any named index (INDEX, UNIQUE, FULLTEXT, SPATIAL) from the table.
     *
     * @param string $indexName The name of the index to drop.
     * @return bool True on success or if the index didn\'t exist, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        44 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'primaryKeyExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if a PRIMARY KEY exists on the table.
     *
     * @return bool True if a primary key exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        45 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addPrimaryKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Adds a PRIMARY KEY to the table.
     *
     * @param string|string[] $columns Column name or an array of column names for a composite primary key.
     * @return bool True on success or if a PK already exists, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        46 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dropPrimaryKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Drops the PRIMARY KEY from the table.
     *
     * @return bool True on success or if no primary key exists, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        47 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'uniqueKeyExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A convenience wrapper to check if a UNIQUE index exists.
     *
     * @param string $indexName The name of the unique index.
     * @return bool True if the unique index exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        48 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addUniqueKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * A convenience wrapper to add a UNIQUE index.
     *
     * @param string|string[] $columns Column name or an array of column names.
     * @param string|null $indexName Name of the unique index (optional for autogenerated name).
     * @return bool True on success or if the index already existed, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columns',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'indexName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        49 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'foreignKeyExists',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Checks if a foreign key constraint with a specific name exists on this table.
     *
     * This method queries the information_schema, which is the standard and most reliable
     * way to check for the existence of constraints across MySQL and MariaDB.
     *
     * @param string $fkName The name of the foreign key constraint to check.
     * @return bool True if the foreign key exists, false otherwise.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fkName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        50 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addForeignKeyToTable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Adds a foreign key by referencing another TableInterface object using conventions.
     *
     * This is the simplest way to create a foreign key. It:
     * 1. Determines the foreign key column name in THIS table by calling `$referencedTable->getForeignKeyName()`.
     * 2. Determines the referenced column name by calling `$referencedTable->getPrimaryKey()`.
     * 3. Generates a standard name for the foreign key constraint.
     *
     * For more complex scenarios (e.g., linking to a non-primary key), use `addForeignKey()`.
     *
     * @param TableInterface $referencedTable The Table object for the table being referenced.
     * @param string         $onDelete        Optional. The action to take on DELETE. Defaults to \'RESTRICT\'.
     * @param string         $onUpdate        Optional. The action to take on UPDATE. Defaults to \'RESTRICT\'.
     * @param string|null    $constraintName  Optional. The name for the foreign key constraint. If null, a name
     *                                        will be generated automatically based on conventions.
     *
     * @return bool True on success or if the constraint already existed, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'referencedTable',
               'type' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'onDelete',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'onUpdate',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'constraintName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        51 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addForeignKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Adds a foreign key constraint to this table using explicit string identifiers.
     *
     * This is the flexible, primitive method for creating foreign keys.
     *
     * @param string      $columnName           The name of the column in this table that will be the foreign key.
     * @param string      $referencedTableName  The full name of the table being referenced.
     * @param string      $referencedColumnName The name of the column in the referenced table.
     * @param string|null $constraintName       Optional. The name for the foreign key constraint. If null, a name
     *                                          will be generated automatically.
     * @param string      $onDelete             Optional. The action to take on DELETE. Defaults to \'RESTRICT\'.
     * @param string      $onUpdate             Optional. The action to take on UPDATE. Defaults to \'RESTRICT\'.
     *
     * @return bool True on success or if the constraint already existed, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'referencedTableName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'referencedColumnName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'constraintName',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'onDelete',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'onUpdate',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        52 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dropForeignKey',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Drops a foreign key constraint from this table.
     *
     * Note: In MySQL, the `$fkName` refers to the constraint\'s symbol/name, not an index name.
     * Dropping a foreign key does not automatically drop the underlying index that may have been
     * created with it. If the index is no longer needed, it should be dropped separately
     * using `dropIndex()`.
     *
     * @param string $fkName The name of the foreign key constraint to drop.
     * @return bool True on success or if the constraint did not exist, false on failure.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'fkName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        53 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateIndexName',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate an index name.
     *
     * @param string|array<int, string> $columnNames Column names.
     * @param string $prefix Index type prefix.
     *
     * @return string
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'columnNames',
               'type' => 'string|array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'prefix',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        54 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cleanIdentifier',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Cleans a string to be safely used as a database identifier.
     *
     * @param string $identifier The raw identifier to be sanitized.
     * @return string The sanitized identifier.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'identifier',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        55 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMariaDb',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the current database server is MariaDB.
     *
     * @return bool True if the server is MariaDB, false if it\'s MySQL or another variant.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        56 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMysqlOrMariaDbVersion',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the MySQL-compatible server version number.
     *
     * @return string Server version number (e.g., "8.0.36", "10.11.6").
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        57 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMysqlAtLeast',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the current MySQL server version is at least the specified version.
     *
     * @param string $version The minimum version number to check.
     * @return bool True if the server is MySQL and its version is at least the specified version.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'version',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        58 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isMariaDbAtLeast',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the current MariaDB server version is at least the specified version.
     *
     * @param string $version The minimum version number to check.
     * @return bool True if the server is MariaDB and its version is at least the specified version.
     */',
             'namespace' => 'WPTechnix\\WPTableManager',
             'uses' => 
            array (
              'logicexception' => 'LogicException',
              'wpdb' => 'wpdb',
              'throwable' => 'Throwable',
              'closure' => 'Closure',
              'loggerawareinterface' => 'Psr\\Log\\LoggerAwareInterface',
              'loggerawaretrait' => 'Psr\\Log\\LoggerAwareTrait',
              'tableinterface' => 'WPTechnix\\WPTableManager\\Interfaces\\TableInterface',
              'createtableschema' => 'WPTechnix\\WPTableManager\\Schema\\CreateTableSchema',
              'schemaexception' => 'WPTechnix\\WPTableManager\\Exceptions\\SchemaException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => true,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'version',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
