/*global describe, it, expect, modules, jasmine*/
describe('ext.wikia.paidAssetDrop.paidAssetDrop', function () {
	'use strict';

	function noop() {
		return;
	}

	var mocks = {
		jquery: {},
		log: noop,
		qs: {
			getVal: noop
		},
		Querystring: function () {
			return mocks.qs;
		},
		win: {}
	};

	function getModule() {
		return modules['ext.wikia.paidAssetDrop.paidAssetDrop'](mocks.jquery, mocks.log, mocks.Querystring, mocks.win);
	}

	it('now is not valid when wgPaidAssetDropConfig is not set', function () {
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is not valid when wgPaidAssetDropConfig start day is not set', function () {
		mocks.win.wgPaidAssetDropConfig = [];
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is not valid when wgPaidAssetDropConfig start day is not set', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-12'];
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is not valid when it is before start date', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14', '2015-04-21'];
		jasmine.clock().mockDate(new Date('2015-04-13'));
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is not valid when it is after end date', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14', '2015-04-21'];
		jasmine.clock().mockDate(new Date('2015-04-22'));
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is valid', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14', '2015-04-21'];
		jasmine.clock().mockDate(new Date('2015-04-20'));
		expect(getModule().isNowValid()).toEqual(true);
	});

	it('now is not valid when it is before start date (case with time)', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14T12:00:00Z', '2015-04-14T20:00:00Z'];
		jasmine.clock().mockDate(new Date('2015-04-14T10:00:00Z'));
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is not valid when it is after end date (case with time)', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14T12:00:00Z', '2015-04-14T20:00:00Z'];
		jasmine.clock().mockDate(new Date('2015-04-14T22:00:00Z'));
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is valid (case with time)', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-14T12:00:00Z', '2015-04-14T20:00:00Z'];
		jasmine.clock().mockDate(new Date('2015-04-14T16:00:00Z'));
		expect(getModule().isNowValid()).toEqual(true);
	});

	it('now is invalid when both dates are invalid', function () {
		mocks.win.wgPaidAssetDropConfig = ['foo', 'bar'];
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('now is invalid when end date is invalid', function () {
		mocks.win.wgPaidAssetDropConfig = ['2015-04-20', 'bar'];
		expect(getModule().isNowValid()).toEqual(false);
	});

	it('URL param', function () {
		mocks.win.wgPaidAssetDropConfig = false;
		spyOn(mocks.qs, 'getVal').and.returnValue('1');
		expect(getModule().isNowValid()).toEqual(true);
	});
});
