<?php
/**
 * Squiz Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: SquizCodingStandard.php 291897 2009-12-08 22:13:49Z squiz $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * Squiz Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.2
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Silverstripe_SilverstripeCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The Squiz standard uses some generic sniffs, and also borrows from the
     * the PEAR standard.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
	    return array(
                'PEAR/Sniffs/Commenting/FunctionCommentSniff.php',
                'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',
	    	'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
	    	'Zend/Sniffs/Files/ClosingTagSniff.php',
		'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
               );

    }//end getIncludedSniffs()


}//end class
?>
