import '../styles/globals.css';
import NextNProgress from "nextjs-progressbar";

function SafeHydrate({ children }) {
	return (
		<div suppressHydrationWarning>
			{typeof window === 'undefined' ? null : children}
		</div>
	)
}

function MyApp({ Component, pageProps }) {
	return <SafeHydrate>
		<NextNProgress/>
		<Component {...pageProps} />
	</SafeHydrate>
}

export default MyApp
