"use strict";

Ext.ns("Ext.ux.TYPO3.Newsletter.Statistics");

/**
 * @class Ext.ux.TYPO3.Newsletter.Statistics.Statistics
 * @namespace Ext.ux.TYPO3.Newsletter.Statistics
 * @extends Ext.Container
 *
 * Class for statistic container
 *
 * $Id$
 */
Ext.ux.TYPO3.Newsletter.Statistics.Statistics = Ext.extend(Ext.Container, {

	initComponent: function() {
		var config = {
			title: Ext.ux.TYPO3.Newsletter.Language.statistics_button,
			items: [
			{
				xtype: 'Ext.ux.TYPO3.Newsletter.Statistics.NewsletterListMenu',
				ref: 'newsletterListMenu'
			},
			{
				xtype: 'Ext.ux.TYPO3.Newsletter.Statistics.StatisticsPanel',
				ref: 'statisticsPanel'
			}
			]
		};
		Ext.apply(this, config);
		Ext.ux.TYPO3.Newsletter.Statistics.Statistics.superclass.initComponent.call(this);
	}
});

Ext.reg('Ext.ux.TYPO3.Newsletter.Statistics.Statistics', Ext.ux.TYPO3.Newsletter.Statistics.Statistics);