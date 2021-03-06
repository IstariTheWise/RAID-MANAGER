<?php

/***************************************************************************
 *                             lang_log.php
 *                            -------------------
 *   begin                : Saturday, Jan 16, 2005
 *   copyright            : (C) 2007-2008 Douglas Wagner
 *   email                : douglasw@wagnerweb.org
 *
 *   $Id: lang_log.php,v 2.00 2008/03/07 13:45:11 psotfx Exp $
 *
 ***************************************************************************/

/***************************************************************************
*
*    WoW Raid Manager - Raid Management Software for World of Warcraft
*    Copyright (C) 2007-2008 Douglas Wagner
*
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
****************************************************************************/

if (empty($phprlang) || !is_array($phprlang))
	$phprlang = array();
	
$phprlang = array_merge($phprlang, array(

// form variables　表單參數
'log_create_text' =>  '新建操作',
'log_date' =>  '日期',
'log_delete_text' =>  '刪除操作',
'log_hack_text' =>  '駭客企圖',
'log_id' =>  'ID',
'log_in' =>  ' 依照 ',
'log_order' =>  ' 依序列表',
'log_raid_text' =>  '團隊活動',
'log_sort_by' =>  '排序 ',
'log_type' =>  '類型',

'log_filter_show' =>  '顯示',
'log_filter_all' =>  '全部',
'log_filter_2_months' =>  '2個月',
'log_filter_1_month' =>  '1個月',
'log_filter_1_week' =>  '1週',
'log_filter_1_day' =>  '1日',

// cancellation  取消
'log_cancel_message' =>  '[取消報名]',

// hack  駭客
'log_hack_header' =>  '偵測到有駭客企圖攻擊',
'log_hack_message' =>  '偵測到有駭客企圖攻擊事件，系統已經紀錄相關操作<br><br>
							<strong>駭客企圖：</strong> %s<br>
							<strong>日期/時間：</strong> %s<br>
							<strong>來源IP：</strong> %s<br><br>
							系統已經紀錄相關訊息，管理者將依此追究責任.',
							
// headers  紀錄標頭
'log_header' =>  '輸出紀錄',
'log_create_header' =>  '新增紀錄',
'log_delete_header' =>  '刪除記錄',
'log_hack_header' =>  '駭客紀錄',
'log_raid_header' =>  '活動管理記錄',
'log_sort_header' =>  '選擇過濾條件',
							
// output text  輸出格式
'log_create' =>  '%s - %s: 用戶 [%s (%s)] 新增了 %s ID為 [%s] 名稱是 [%s]',
'log_delete' =>  '%s - %s: 用戶 [%s (%s)] 刪除了 %s 名稱是 [%s]',
'log_hack' =>  '%s - %s: 來自IP為 [%s] 的用戶企圖進行不正當的操作 [%s]',
'log_raid' =>  '%s - %s: 用戶 [%s (%s)] 對 %s 活動進行調整，以 %s 身分，角色名為 %s',
));  ?>