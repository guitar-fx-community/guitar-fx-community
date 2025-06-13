<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import {
    NavigationMenu,
    NavigationMenuContent,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    NavigationMenuTrigger,
    navigationMenuTriggerStyle,
} from '@/components/ui/navigation-menu'

const components: { title: string, href: string, description: string }[] = [
    {
        title: 'Alert Dialog',
        href: '/docs/components/alert-dialog',
        description:
            'A modal dialog that interrupts the user with important content and expects a response.',
    },
    {
        title: 'Hover Card',
        href: '/docs/components/hover-card',
        description:
            'For sighted users to preview content available behind a link.',
    },
    {
        title: 'Progress',
        href: '/docs/components/progress',
        description:
            'Displays an indicator showing the completion progress of a task, typically displayed as a progress bar.',
    },
    {
        title: 'Scroll-area',
        href: '/docs/components/scroll-area',
        description: 'Visually or semantically separates content.',
    },
    {
        title: 'Tabs',
        href: '/docs/components/tabs',
        description:
            'A set of layered sections of content—known as tab panels—that are displayed one at a time.',
    },
    {
        title: 'Tooltip',
        href: '/docs/components/tooltip',
        description:
            'A popup that displays information related to an element when the element receives keyboard focus or the mouse hovers over it.',
    },
]
</script>

<template>

    <Head title="Home">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a] dark:text-[#FDFDFC]">
        <header class="mb-6 max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl">

            <NavigationMenu
                class="w-full max-w-full"
            >
                <NavigationMenuList
                    class="w-full items-center justify-start"
                >
                    <NavigationMenuItem>
                        <NavigationMenuTrigger>Getting started</NavigationMenuTrigger>
                        <NavigationMenuContent>
                            <ul
                                class="grid gap-3 p-6 md:w-[400px] lg:w-[500px] lg:grid-cols-[minmax(0,.75fr)_minmax(0,1fr)]">
                                <li class="row-span-3">
                                    <NavigationMenuLink as-child>
                                        <a class="flex h-full w-full select-none flex-col justify-end rounded-md bg-gradient-to-b from-muted/50 to-muted p-6 no-underline outline-none focus:shadow-md"
                                            href="/">
                                            <img src="https://www.reka-ui.com/logo.svg" class="h-6 w-6">
                                            <div class="mb-2 mt-4 text-lg font-medium">
                                                shadcn/ui
                                            </div>
                                            <p class="text-sm leading-tight text-muted-foreground">
                                                Beautifully designed components built with Radix UI and
                                                Tailwind CSS.
                                            </p>
                                        </a>
                                    </NavigationMenuLink>
                                </li>

                                <li>
                                    <NavigationMenuLink as-child>
                                        <a href="/docs/introduction"
                                            class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground">
                                            <div class="text-sm font-medium leading-none">Introduction</div>
                                            <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                                                Re-usable components built using Radix UI and Tailwind CSS.
                                            </p>
                                        </a>
                                    </NavigationMenuLink>
                                </li>
                                <li>
                                    <NavigationMenuLink as-child>
                                        <a href="/docs/installation"
                                            class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground">
                                            <div class="text-sm font-medium leading-none">Installation</div>
                                            <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                                                How to install dependencies and structure your app.
                                            </p>
                                        </a>
                                    </NavigationMenuLink>
                                </li>
                                <li>
                                    <NavigationMenuLink as-child>
                                        <a href="/docs/typography"
                                            class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground">
                                            <div class="text-sm font-medium leading-none">Typography</div>
                                            <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                                                Styles for headings, paragraphs, lists...etc
                                            </p>
                                        </a>
                                    </NavigationMenuLink>
                                </li>
                            </ul>
                        </NavigationMenuContent>
                    </NavigationMenuItem>
                    
                    <NavigationMenuItem>
                        <NavigationMenuTrigger>Components</NavigationMenuTrigger>
                        <NavigationMenuContent>
                            <ul class="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px] ">
                                <li v-for="component in components" :key="component.title">
                                    <NavigationMenuLink as-child>
                                        <a :href="component.href"
                                            class="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground">
                                            <div class="text-sm font-medium leading-none">{{ component.title }}</div>
                                            <p class="line-clamp-2 text-sm leading-snug text-muted-foreground">
                                                {{ component.description }}
                                            </p>
                                        </a>
                                    </NavigationMenuLink>
                                </li>
                            </ul>
                        </NavigationMenuContent>
                    </NavigationMenuItem>
                    
                    <NavigationMenuItem>
                        <NavigationMenuLink href="#" :class="navigationMenuTriggerStyle()">
                            Documentation
                        </NavigationMenuLink>
                    </NavigationMenuItem>

                    
                    <NavigationMenuItem class="flex justify-end">
                        <NavigationMenuLink
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            :class="navigationMenuTriggerStyle()"
                        >
                            Dashboard
                        </NavigationMenuLink>

                        <template v-else>
                            <NavigationMenuLink
                                :href="route('login')"
                                :class="navigationMenuTriggerStyle()"
                            >
                                Log&nbsp;in
                            </NavigationMenuLink>
                            <NavigationMenuLink
                                :href="route('register')"
                                :class="navigationMenuTriggerStyle()"
                            >
                                Register
                            </NavigationMenuLink>
                        </template>
                    </NavigationMenuItem>
                </NavigationMenuList>
            </NavigationMenu>

        </header>
        <div class="flex w-full items-center justify-center lg:grow"></div>
    </div>
</template>