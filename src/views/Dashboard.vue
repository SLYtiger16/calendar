<!--
  - @copyright Copyright (c) 2020 Julius Härtl <jus@bitgrid.net>
  -
  - @author Julius Härtl <jus@bitgrid.net>
  -
  - @license GNU AGPL version 3 or any later version
  -
  - This program is free software: you can redistribute it and/or modify
  - it under the terms of the GNU Affero General Public License as
  - published by the Free Software Foundation, either version 3 of the
  - License, or (at your option) any later version.
  -
  - This program is distributed in the hope that it will be useful,
  - but WITHOUT ANY WARRANTY; without even the implied warranty of
  - MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  - GNU Affero General Public License for more details.
  -
  - You should have received a copy of the GNU Affero General Public License
  - along with this program. If not, see <http://www.gnu.org/licenses/>.
  -
  -->

<template>
	<EmptyContent>
		<img :src="imagePath" />
		{{ t('calendar', 'Schedule your appointments') }}
		<template #desc>
			<p></p>
			<button>{{ t('calendar', 'Create a new event') }}</button>
		</template>
	</EmptyContent>
</template>

<script>
import { imagePath } from '@nextcloud/router'
import EmptyContent from '@nextcloud/vue/dist/Components/EmptyContent'

export default {
	name: 'Dashboard',
	components: {
		EmptyContent,
	},
	data() {
		return {
			imagePath: imagePath('calendar', 'illustrations/calendar'),
		}
	},
}
</script>

<style lang="scss" scoped>
	.empty-content {
		text-align: center;
		margin-top: 50px;
	}

	::v-deep .empty-content__icon {
		display: none;
	}

	img {
		width: 50%;
		display: block;
		margin: auto;
		margin-bottom: 30px;
	}
</style>
