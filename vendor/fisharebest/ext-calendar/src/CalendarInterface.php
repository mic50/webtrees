<?php
namespace Fisharebest\ExtCalendar;

/**
 * Interface CalendarInterface - each calendar implementation needs to provide
 * these methods.
 *
 * Many of them are actually provided by the AbstractCalendar base class.
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2014 Greg Roach
 * @license       This program is free software: you can redistribute it and/or modify
 *                it under the terms of the GNU General Public License as published by
 *                the Free Software Foundation, either version 3 of the License, or
 *                (at your option) any later version.
 *
 *                This program is distributed in the hope that it will be useful,
 *                but WITHOUT ANY WARRANTY; without even the implied warranty of
 *                MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *                GNU General Public License for more details.
 *
 *                You should have received a copy of the GNU General Public License
 *                along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
interface CalendarInterface {
	/**
	 * Determine the number of days in a specified month, allowing for leap years, etc.
	 *
	 * @param integer $year
	 * @param integer $month
	 *
	 * @return integer
	 */
	public function daysInMonth($year, $month);

	/**
	 * Convert a Julian day number into a year/month/day.
	 *
	 * @param integer $julian_day
	 *
	 * @return integer[]
	 */
	public function jdToYmd($julian_day);

	/**
	 * Determine whether or not a given year is a leap-year.
	 *
	 * @param integer $year
	 *
	 * @return boolean
	 */
	public function isLeapYear($year);

	/**
	 * Convert a year/month/day to a Julian day number.
	 *
	 * @param integer $year
	 * @param integer $month
	 * @param integer $day
	 *
	 * @return integer
	 */
	public function ymdToJd($year, $month, $day);
}
