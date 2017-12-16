<?php

	interface NotifierFactory
	{
		public static function getNotifier($notifier, $to);
	}

	class ElectronicNotifierFactory implements NotifierFactory
	{
		public static function getNotifier($notifier, $to)
		{
			if(empty($notifier))
			{
				throw new Exception("No notifier passed.");
			}

			switch ($notifier)
			{
				case 'SMS':
					return new SMS($to);
					break;
				case 'Email':
					return new Email($to, 'hxhRonie');
					break;
				default:
					throw new Exception("Notifier invalid.");
					break;
			}
		}
	}



?>