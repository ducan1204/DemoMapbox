USE [mapbox]
GO
ALTER TABLE [dbo].[sub_districts] DROP CONSTRAINT [sub_districts_district_id_foreign]
GO
ALTER TABLE [dbo].[posts] DROP CONSTRAINT [posts_sub_district_id_foreign]
GO
ALTER TABLE [dbo].[posts] DROP CONSTRAINT [posts_district_id_foreign]
GO
ALTER TABLE [dbo].[posts] DROP CONSTRAINT [posts_city_id_foreign]
GO
ALTER TABLE [dbo].[districts] DROP CONSTRAINT [districts_city_id_foreign]
GO
ALTER TABLE [dbo].[users] DROP CONSTRAINT [DF__users__type__25869641]
GO
ALTER TABLE [dbo].[failed_jobs] DROP CONSTRAINT [DF__failed_jo__faile__29572725]
GO
/****** Object:  Table [dbo].[users]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[users]
GO
/****** Object:  Table [dbo].[sub_districts]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[sub_districts]
GO
/****** Object:  Table [dbo].[posts]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[posts]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[password_resets]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[migrations]
GO
/****** Object:  Table [dbo].[maps]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[maps]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[failed_jobs]
GO
/****** Object:  Table [dbo].[districts]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[districts]
GO
/****** Object:  Table [dbo].[cities]    Script Date: 3/3/2020 11:29:36 PM ******/
DROP TABLE [dbo].[cities]
GO
/****** Object:  Table [dbo].[cities]    Script Date: 3/3/2020 11:29:36 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cities](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](max) NOT NULL,
	[region] [nvarchar](max) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[districts]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[districts](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[city_id] [bigint] NOT NULL,
	[name] [nvarchar](max) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[maps]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[maps](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[title] [nvarchar](255) NOT NULL,
	[address] [nvarchar](255) NOT NULL,
	[city] [nvarchar](255) NOT NULL,
	[map_style] [nvarchar](255) NOT NULL,
	[access_token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[posts]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[posts](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[title] [nvarchar](max) NOT NULL,
	[address] [nvarchar](max) NOT NULL,
	[city_id] [bigint] NOT NULL,
	[district_id] [bigint] NOT NULL,
	[sub_district_id] [bigint] NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[sub_districts]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sub_districts](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[district_id] [bigint] NOT NULL,
	[name] [nvarchar](max) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 3/3/2020 11:29:37 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[type] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[maps] ON 

INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (1, N'Style 2', N'Address', N'Ha Noi', N'mapbox://styles/leducan/ck6r8hj0n5kqn1ilemu1tuggs', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-02-23T02:06:20.287' AS DateTime), CAST(N'2020-03-03T13:22:11.623' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (2, N'Bản đồ quy hoạch phường Thắng Lợi x', N'123, đường B8, phường 1, quận 2', N'Ha Noi', N'mapbox://styles/leducan/ck6r897zi0r8t1iqkbk76w9t4', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-02-23T04:22:20.120' AS DateTime), CAST(N'2020-02-24T14:43:22.820' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10002, N'Style 3', N'Street 3', N'Ho Chi Minh', N'mapbox://styles/leducan/ck7bx2yg70j3p1ip6gneswh6z', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:20:52.843' AS DateTime), CAST(N'2020-03-03T13:20:52.843' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10003, N'Style 4', N'Street 4', N'Can Tho', N'mapbox://styles/leducan/ck7bx0l1b07hz1iphqwl9ja1b', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:23:44.557' AS DateTime), CAST(N'2020-03-03T13:23:44.557' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10004, N'Style 5', N'Street 5', N'Hue', N'mapbox://styles/leducan/ck7bx09i80dqn1ilctf69xc5c', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:26:02.023' AS DateTime), CAST(N'2020-03-03T13:26:02.023' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10005, N'Style 6', N'Street 6', N'Ha Noi', N'mapbox://styles/leducan/ck6r897zi0r8t1iqkbk76w9t4', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:27:44.743' AS DateTime), CAST(N'2020-03-03T13:28:29.637' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10006, N'Style 7', N'Street 7', N'Hue', N'mapbox://styles/leducan/ck6r8hj0n5kqn1ilemu1tuggs', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:30:49.220' AS DateTime), CAST(N'2020-03-03T13:30:49.220' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10007, N'Style 8', N'Street 8', N'Ho Chi Minh', N'mapbox://styles/leducan/ck6rpjtuo18lz1in0z1q3m84t', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:33:00.140' AS DateTime), CAST(N'2020-03-03T13:33:00.140' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10008, N'Street 9', N'Street 9', N'Hue', N'mapbox://styles/leducan/ck7bxol2a0gd81ipkwylpj3ht', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:35:23.640' AS DateTime), CAST(N'2020-03-03T13:35:23.640' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10009, N'Style 10', N'Street 10', N'Da Nang', N'mapbox://styles/leducan/ck7bxr0l603la1ioct43fgond', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:37:01.943' AS DateTime), CAST(N'2020-03-03T13:37:01.943' AS DateTime))
INSERT [dbo].[maps] ([id], [title], [address], [city], [map_style], [access_token], [created_at], [updated_at]) VALUES (10010, N'Style 11', N'Street 11', N'Can Tho', N'mapbox://styles/leducan/ck7bxswqa0diy1ipfoya27b28', N'pk.eyJ1IjoibGVkdWNhbiIsImEiOiJjazZxaW1jZW4xdGRoM2RwZm00eHZvOWkwIn0.wdU-dm5AGs-IrtoKISlW3g', CAST(N'2020-03-03T13:38:08.810' AS DateTime), CAST(N'2020-03-03T13:38:08.810' AS DateTime))
SET IDENTITY_INSERT [dbo].[maps] OFF
SET IDENTITY_INSERT [dbo].[migrations] ON 

INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (1, N'2014_10_12_000000_create_users_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (2, N'2014_10_12_100000_create_password_resets_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (3, N'2019_08_19_000000_create_failed_jobs_table', 1)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (4, N'2020_02_22_215104_create_maps_table', 2)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (5, N'2020_02_26_152915_create_cities_table', 3)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (6, N'2020_02_26_160730_create_districts_table', 4)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (7, N'2020_02_26_161421_create_sub_districts_table', 5)
INSERT [dbo].[migrations] ([id], [migration], [batch]) VALUES (8, N'2020_02_26_152406_create_posts_table', 6)
SET IDENTITY_INSERT [dbo].[migrations] OFF
SET IDENTITY_INSERT [dbo].[users] ON 

INSERT [dbo].[users] ([id], [name], [email], [email_verified_at], [password], [remember_token], [type], [created_at], [updated_at]) VALUES (1, N'Admin', N'admin@admin.com', NULL, N'$2y$10$K0XQu1UJhJSIpKZQ2lrl9OyVyuypeqLwiRwV8BvdujJwSX.CGsNQa', NULL, N'default', CAST(N'2020-02-22T03:04:31.400' AS DateTime), CAST(N'2020-02-22T19:17:16.600' AS DateTime))
SET IDENTITY_INSERT [dbo].[users] OFF
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
ALTER TABLE [dbo].[users] ADD  DEFAULT ('default') FOR [type]
GO
ALTER TABLE [dbo].[districts]  WITH CHECK ADD  CONSTRAINT [districts_city_id_foreign] FOREIGN KEY([city_id])
REFERENCES [dbo].[cities] ([id])
GO
ALTER TABLE [dbo].[districts] CHECK CONSTRAINT [districts_city_id_foreign]
GO
ALTER TABLE [dbo].[posts]  WITH CHECK ADD  CONSTRAINT [posts_city_id_foreign] FOREIGN KEY([city_id])
REFERENCES [dbo].[cities] ([id])
GO
ALTER TABLE [dbo].[posts] CHECK CONSTRAINT [posts_city_id_foreign]
GO
ALTER TABLE [dbo].[posts]  WITH CHECK ADD  CONSTRAINT [posts_district_id_foreign] FOREIGN KEY([district_id])
REFERENCES [dbo].[districts] ([id])
GO
ALTER TABLE [dbo].[posts] CHECK CONSTRAINT [posts_district_id_foreign]
GO
ALTER TABLE [dbo].[posts]  WITH CHECK ADD  CONSTRAINT [posts_sub_district_id_foreign] FOREIGN KEY([sub_district_id])
REFERENCES [dbo].[sub_districts] ([id])
GO
ALTER TABLE [dbo].[posts] CHECK CONSTRAINT [posts_sub_district_id_foreign]
GO
ALTER TABLE [dbo].[sub_districts]  WITH CHECK ADD  CONSTRAINT [sub_districts_district_id_foreign] FOREIGN KEY([district_id])
REFERENCES [dbo].[districts] ([id])
GO
ALTER TABLE [dbo].[sub_districts] CHECK CONSTRAINT [sub_districts_district_id_foreign]
GO
