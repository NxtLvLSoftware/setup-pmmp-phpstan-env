<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b9a313594aacd050153ff09c5969bce
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pocketmine\\phpstan\\rules\\' => 25,
        ),
        'P' => 
        array (
            'PHPStan\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pocketmine\\phpstan\\rules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/rules',
        ),
        'PHPStan\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInBooleanAndRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInBooleanNotRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInBooleanOrRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInElseIfConditionRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInIfConditionRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanInTernaryOperatorRule.php',
        'PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/BooleansInConditions/BooleanRuleHelper.php',
        'PHPStan\\Rules\\Cast\\UselessCastRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Cast/UselessCastRule.php',
        'PHPStan\\Rules\\Classes\\RequireParentConstructCallRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Classes/RequireParentConstructCallRule.php',
        'PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/DisallowedConstructs/DisallowedBacktickRule.php',
        'PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/DisallowedConstructs/DisallowedEmptyRule.php',
        'PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/DisallowedConstructs/DisallowedImplicitArrayCreationRule.php',
        'PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/DisallowedConstructs/DisallowedLooseComparisonRule.php',
        'PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/DisallowedConstructs/DisallowedShortTernaryRule.php',
        'PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/ForLoop/OverwriteVariablesWithForLoopInitRule.php',
        'PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/ForeachLoop/OverwriteVariablesWithForeachRule.php',
        'PHPStan\\Rules\\Functions\\ClosureUsesThisRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Functions/ClosureUsesThisRule.php',
        'PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Methods/WrongCaseOfInheritedMethodRule.php',
        'PHPStan\\Rules\\Operators\\OperandInArithmeticIncrementOrDecrementRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandInArithmeticIncrementOrDecrementRule.php',
        'PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandInArithmeticPostDecrementRule.php',
        'PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandInArithmeticPostIncrementRule.php',
        'PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandInArithmeticPreDecrementRule.php',
        'PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandInArithmeticPreIncrementRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticAdditionRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticDivisionRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticExponentiationRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticModuloRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticMultiplicationRule.php',
        'PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperandsInArithmeticSubtractionRule.php',
        'PHPStan\\Rules\\Operators\\OperatorRuleHelper' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/Operators/OperatorRuleHelper.php',
        'PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/StrictCalls/DynamicCallOnStaticMethodsCallableRule.php',
        'PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/StrictCalls/DynamicCallOnStaticMethodsRule.php',
        'PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/StrictCalls/StrictFunctionCallsRule.php',
        'PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/SwitchConditions/MatchingTypeInSwitchCaseConditionRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableMethodCallRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableMethodCallableRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariablePropertyFetchRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableStaticMethodCallRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableStaticMethodCallableRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableStaticPropertyFetchRule.php',
        'PHPStan\\Rules\\VariableVariables\\VariableVariablesRule' => __DIR__ . '/..' . '/phpstan/phpstan-strict-rules/src/Rules/VariableVariables/VariableVariablesRule.php',
        'pocketmine\\phpstan\\rules\\DisallowEnumComparisonRule' => __DIR__ . '/../..' . '/rules/DisallowEnumComparisonRule.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b9a313594aacd050153ff09c5969bce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b9a313594aacd050153ff09c5969bce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b9a313594aacd050153ff09c5969bce::$classMap;

        }, null, ClassLoader::class);
    }
}
